<?php

namespace App\Http\Controllers\Dashboad;

use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function setlang($lang)
    {
        App::setLocale($lang);
        session()->put('lang', $lang);
        session()->put('language', $lang);
        return redirect()->back();
    }

    public function index()
    {
        self::set_lang();
        // $nav_bars = User::orderBy('order', 'asc')->get();
        $titleofpage = __('lang.main');
        return view('dashboard.main.index', compact(  'titleofpage'));
    }
    public function set_lang()
    {
        switch (session()->get('lang')) {
            case 'en':
                $this->lang = "en";
                break;
            case 'ar':
                $this->lang = "ar";
                break;

            default:
                $this->lang = "en";
                break;
        }
        App::setlocale($this->lang);
    }


    public function admin_login(Request $request)
    {

        self::set_lang();
        $validation = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validation->fails()) {
            return $validation->errors();
        }


        $user = User::where('email', $request['email'])->first();
            // dd($user);
        if ($user->is_admin == '1' && password_verify($request['password'], $user->password) && Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('main');
        }
        return redirect('/')->with('err', 'User does not exist');
    }


    public function login()
    {
        self::set_lang();
        if (session()->has('loggedin') == 'true') {
            return redirect("/");
        } else {
            return view('dashboard.Auth.login', [
                'titleofpage' => __('lang.login'),
            ]);
        }
    }

    public function logout()
    {
        self::set_lang();
        Auth::logout();
        return redirect()->to('/');
    }
}
