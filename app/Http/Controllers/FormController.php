<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class FormController extends Controller
{

    public function registerUser(SignUpRequest $request)
    {
        $dataArr=$request->only(['first_name','last_name','email','password','image']);
        User::create($dataArr);
//        return redirect('feeds');
        return redirect('login');
    }

    public function loginUser(LoginRequest $request)
    {
        $userData=$request->only(['email','password']);
        if(Auth::attempt($userData)){

            $user=Auth::user();
            $user->auth_token=md5($user->email.time().str_random());
            $user->save();

          return redirect('post');
        }
            dd("failed");
    }

    public function logoutHere()
    {
        Auth::logout();
        return redirect('login');
    }
}
