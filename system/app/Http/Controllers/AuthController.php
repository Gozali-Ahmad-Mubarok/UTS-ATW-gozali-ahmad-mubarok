<?php

namespace App\Http\Controllers; 
use Auth;
use App\Models\User;

class AuthController extends Controller{

function showLogin(){
        return view('login');
    }

    function LoginProcess(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('home')->with('success','Login berhasil');
        }else{
            return back()->with('danger', 'login gagal'); 
        }
    }
    function logout(){
        
        Auth::logout();
        return redirect('home');        
    }

    function showregister(){
        return view('register');
    }
    function storeregister(){

        $user =  new user; 
        $user->nama =  request('nama'); 
        $user->email =  request('email'); 
        $user->password= bcrypt(request('password'));
        $user->save(); 

    return redirect('Login')->with('success', 'data berhasil di tambahkan');                
}
}