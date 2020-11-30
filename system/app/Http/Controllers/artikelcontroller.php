<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use App\Models\Authenticatable;
class artikelcontroller extends Controller{

    function index(){
            // $data['list_artikel'] = artikel::has('produk')->get();
            $data['list_artikel'] = artikel::all();
            // $data['list_artikel'] = artikel::withCount('produk')->get();
            return view('artikel.index', $data);
    }
    function create(){
            return view('artikel.create');
    }
    function store(){
            $artikel =  new artikel; 
            $artikel->judul =  request('judul');
            $artikel->penulis =  request('penulis'); 
            $artikel->artikel = request('artikel');
            $artikel->tanggal_upload =  request('tanggal_upload');  
            $artikel->save();  

        return redirect('artikel')->with('success', 'data berhasil di tambahkan');                
    }
    function show(artikel $artikel){ 
        $data['artikel'] = $artikel;
            return view('artikel.show', $data); 
    }
    function edit(artikel $artikel){ 
        $data['artikel'] = $artikel;
        return view('artikel.edit', $data); 
    }
    function update(artikel $artikel){   
        $artikel->judul =  request('judul');
        $artikel->penulis =  request('penulis'); 
        $artikel->artikel = request('artikel');
        $artikel->tanggal_upload =  request('tanggal_upload');  
        $artikel->save(); 

        return redirect('artikel') ->with('success', 'data berhasil di edit');
    }
    function destroy(artikel $artikel){
            $artikel->delete();

            return redirect('artikel') ->with('danger', 'data berhasil di hapus');
    }
}