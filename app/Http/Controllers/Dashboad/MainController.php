<?php

namespace App\Http\Controllers\Dashboad;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
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


    public function users()
    {
        self::set_lang();
        $users = User::get();
        $titleofpage = __('lang.users');
        return view('dashboard.users.index', compact('users', 'titleofpage'));
    }


    public function getusers()
    {
        self::set_lang();
        $users = User::where('is_admin','0')->get();
        if (request()->ajax()) {
            return Datatables::of($users)
                ->addColumn('action', function ($user) {
                    $buttons = '<div class="d-flex">';
                    $buttons .= '<button class="btn btn-sm btn-primary mr-2 edit-btn" data-id="' . $user->id . '">' . __('lang.update') . '</button>';
                    $buttons .= '<button class="btn btn-sm btn-danger delete-btn" data-id="' . $user->id . '">' . __('lang.delete') . '</button>';
                    $buttons .= '</div>';

                    return $buttons;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function getusersdata($id)
    {
        self::set_lang();
        $User = User::find($id);
        if (!$User) {
            return response()->json(['error' => 'User not found'], 404);
        }

        return response()->json(['User' => $User], 200);
    }

    public function UpdateUser($id, Request $request)
    {
        self::set_lang();

        try {
            $User = User::find($id);

            if (!$User) {
                return response()->json(['error' => 'User not found'], 404);
            }
            $User->update($request->all());
            return response()->json(['message' => 'User updated successfully']);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    public function AddUser(Request $request)

    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6',
            'PhoneNumber' => 'required|string|numeric|unique:users',
            'UserName' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $User = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'PhoneNumber' => $request->PhoneNumber,
                'UserName' => $request->UserName,
                'password' => bcrypt($request->password),
            ]
        );
        if ($User) {
            return redirect()->route('main.index')->with('success', 'Project added successfully.');
        } else {
            return redirect()->route('profile')->with('error', 'Project failed.');
        }
    }
    public function DeleteUser($id)
    {
        self::set_lang();

        try {
            $User = User::find($id);
            // Delete the course record
            $User->delete();

            return response()->json(['message' => 'User deleted successfully']);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }



}
