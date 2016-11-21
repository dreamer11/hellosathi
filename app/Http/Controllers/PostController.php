<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function showPost()
    {
        $user = Auth::user();
        $post = $user->posts;
        return view('pages.post', ['feeds' => $post]);

    }

    public function addPost(PostRequest $request)
    {

//        $user = $request->user();
//        $user->posts()->create( $request->only('post'));
//         dd( DB::getQueryLog() );
        $user = Auth::user();
        $user->posts()->create($request->only(['post']));

        return redirect('post')->with('message', '<div class="alert alert-success">Post Created Successfully </div>');
    }
}
