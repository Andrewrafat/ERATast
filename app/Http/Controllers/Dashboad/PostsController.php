<?php

namespace App\Http\Controllers\Dashboad;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
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


    public function Posts()
    {
        self::set_lang();
        $users=User::where('is_admin','0')->get();
        $Posts =post::get();
        $titleofpage = __('lang.Posts');
        return view('dashboard.Posts.index', compact('Posts', 'titleofpage','users'));
    }


    public function getPosts()
    {
        self::set_lang();
        $Posts =Post::get();
        if (request()->ajax()) {
            return Datatables::of($Posts)
                ->addColumn('action', function ($offer) {
                    $buttons = '<div class="d-flex">';
                    $buttons .= '<button class="btn btn-sm btn-primary mr-2 edit-btn" data-id="' . $offer->id . '">' . __('lang.update') . '</button>';
                    $buttons .= '<button class="btn btn-sm btn-danger delete-btn" data-id="' . $offer->id . '">' . __('lang.delete') . '</button>';
                    $buttons .= '</div>';

                    return $buttons;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function getPostsdata($id)
    {
        self::set_lang();
        $User =post::find($id);
        if (!$User) {
            return response()->json(['error' => 'User not found'], 404);
        }

        return response()->json(['User' => $User], 200);
    }

    public function UpdatePost($id, Request $request)
    {
        self::set_lang();

        try {
            $User =post::find($id);

            if (!$User) {
                return response()->json(['error' => 'User not found'], 404);
            }
            $User->update($request->all());
            return response()->json(['message' => 'User updated successfully']);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    public function AddPost(Request $request)

    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:2048',
            'contact_phone' => 'required|string|max:20',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return $this->returnData('false', [], 400, $validator->errors());
        }
        $user =Post::create(
            [
                'title' => $request->title,
                'description' => $request->description,
                'contact_phone' => $request->contact_phone,
                'user_id' => $request->user_id,
            ]
        );
        if ($user) {
            return redirect()->route('main.index')->with('success', 'Project added successfully.');
        } else {
            return redirect()->route('profile')->with('error', 'Project failed.');
        }
    }
    public function DeletePost($id)
    {
        self::set_lang();

        try {
            $User =post::find($id);
            // Delete the course record
            $User->delete();

            return response()->json(['message' => 'User deleted successfully']);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }


}
