<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Traits\ResponseTrait;
use App\Events\NewPostCreated; // Import the event class

class PostsController extends Controller
{
    use ResponseTrait;
    public function index(Request $request)
    {
        // Fetch paginated posts, sorted by most recent
        $posts = Post::orderBy('created_at', 'desc')->paginate(10); // 10 posts per page
        return $this->returnData('true', $posts, 200);
    }
    public function  post_create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:2048',
            'contact_phone' => 'required|string|max:20',
        ]);
        if ($validator->fails()) {
            return $this->returnData('false', [], 400, $validator->errors());
        }

        $created_post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'contact_phone' => $request->contact_phone,
            'user_id' => auth('api')->user()->id
        ]);

        if ($created_post) {
            event(new NewPostCreated($created_post));
 
            return $this->returnData('true', [], 200, 'post created successfully.');
        } else {

            return $this->returnData('true', [], 401, 'error while creating post');
        }
    }
}
