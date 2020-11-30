<?php

namespace App\Http\Controllers;


use App\Http\Controllers\AuthController;
use Auth;

class HomeController extends Controller {

   
    function showLogin(){
        return view('Login');
    }

    function showregister(){
        return view('register');
    }
    function showhome(){
        return view('home');
    }

    function showblog(){
        return view('blog');
    }
    
    function showindex(){
        return view('index');
    }

}