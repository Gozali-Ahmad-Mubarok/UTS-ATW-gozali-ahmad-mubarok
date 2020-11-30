<?php

namespace App\Http\Controllers;
use App\Models\User; 

class Usercontroller extends Controller{
    function index(){
            // $data['list_user'] = User::has('produk')->get();
            $data['list_user'] = User::all();
            // $data['list_user'] = User::withCount('produk')->get();
            return view('user.index', $data);
    }
    function create(){
            return view('user.create');
    }
    function store(){
            $user =  new User; 
            $user->nama =  request('nama');
            $user->email =  request('email'); 
            $user->password =  bcrypt(request('password'));
            $user->save(); 

            // $userDetail = new UserDetail() ;
            // $userDetail->id_user = $user->id;
            // $userDetail->no_hp = request('no_hp');
            // $userDetail->save();

        return redirect('user')->with('success', 'data berhasil di tambahkan');                
    }
    function show(User $user){ 
        $data['user'] = $user;
            return view('user.show', $data); 
    }
    function edit(User $user){ 
        $data['user'] = $user;
        return view('user.edit', $data); 
    }
    function update(User $user){   
        $user->nama =  request('nama');
        $user->email =  request('email'); 
        if (request('password')) $user->password = bcrypt(request('password')); 
        $user->save(); 

        return redirect('user') ->with('success', 'data berhasil di edit');
    }
    function destroy(User $user){
            $user->delete();

            return redirect('user') ->with('danger', 'data berhasil di hapus');
    }
}