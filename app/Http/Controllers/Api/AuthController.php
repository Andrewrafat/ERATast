<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ResponseTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;

class AuthController extends Controller
{
    use ResponseTrait;
    public function profile()
    {
        $user = auth()->user();

        if (!$user) {
            return $this->returnData('false', [], 404, 'User not found');
        }

        return $this->returnData('true', $user, 200);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'PhoneNumber' => 'required',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            return $this->returnData('false', [], 400, $validator->errors());
        }
        $credentials = request(['PhoneNumber', 'password']);
        if (!$token = auth('api')->attempt($credentials)) {
            return $this->returnData('true', [], 401, 'Not Authorized');
        }
        return $this->createNewToken($token);
    }



    public function sendVerificationCode($PhoneNumber)
    {
        $twilio = new Client(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));

        $verificationCode = mt_rand(1000, 9999);

        $twilio->messages->create(
            "+" . $PhoneNumber, // Receiver's phone number
            [
                'from' => env('TWILIO_PHONE_NUMBER'), // Your Twilio phone number
                'body' => 'Your verification code is: ' . $verificationCode,
            ]
        );

        return response()->json(['verification_code' => $verificationCode]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users,email',
            'password' => 'required|string|confirmed|min:6',
            'PhoneNumber' => 'required|unique:users,PhoneNumber',
            'UserName' => 'required|string',
        ]);
        if ($validator->fails()) {
            return $this->returnData('false', [], 400, $validator->errors());
        }
        $user = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'PhoneNumber' => $request->PhoneNumber,
                'UserName' => $request->UserName,
                'password' => Hash::make($request->password),
            ]
        );
        if ($user) {
            return self::login($request);

        } else {
            return $this->returnData('true', [], 500, 'something went wrong');
        }
    }
    public function verifyPhone(Request $request)
    {
        // Validate verification code
        $validator = Validator::make($request->all(), [
            'PhoneNumber' => 'required|string|numeric',
            'verification_code' => 'required|string|numeric',
        ]);
        if ($validator->fails()) {
            return $this->returnData('false', [], 400, $validator->errors());
        }

        $storedVerificationCode = $request->session()->get('verification_code');

        if ($storedVerificationCode === $request->verification_code) {
            User::where('PhoneNumber', $request->PhoneNumber)->update(['PhoneNumber_verified_at' => now()]);
            return $this->returnData('true', [], 200, 'Phone number verified successfully.');
        } else {
            return $this->returnData('true', [], 400, 'Invalid verification code.');
        }
    }
    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'user' => auth('api')->user()
        ]);
    }
}
