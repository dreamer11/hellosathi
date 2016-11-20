<?php

namespace App\Http\Controllers;


class PageController extends Controller
{

    public function index(){

        return view('home');
    }


    public function loginForm(){

        return view('pages.login');
    }


    public function registerForm(){

        return view('pages.register');
    }


}
