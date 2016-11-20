<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
        public function showPost()
        {
            return view('pages.post');

        }

        public function addPost(PostRequest $request)
        {
        }
}
