<?php

namespace App\Http\Controllers;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class FormController extends Controller
{

    public function registerUser(SignUpRequest $request)
    {
        $dataArr=$request->only(['first_name','last_name','email','password']);
        User::create($dataArr);
//        return redirect('feeds');
        return redirect('login');
    }

    public function loginUser(Request $request)
    {
        $userData=$request->only(['email','password']);
        if(Auth::attempt($userData)){

          return redirect('post');
        }
            dd("failed");
    }
}
