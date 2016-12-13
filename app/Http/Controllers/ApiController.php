<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function posts()
    {
//        return Post::all();
        return Post::with('user')->get();
    }
}
