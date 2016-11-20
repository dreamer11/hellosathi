<?php

namespace App\Http\Controllers;


class PageController extends Controller
{

    public function index(){

        return view('welcome');
    }
    public function login(){

        return view('pages.login');
    }

    public function signupForm(){

        return view('pages.signup');
    }


}
