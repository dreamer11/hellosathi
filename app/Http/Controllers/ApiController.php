<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function posts()
    {
        return Post::with('user')->get();
    }
}
