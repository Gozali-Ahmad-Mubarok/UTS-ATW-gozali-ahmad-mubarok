<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\artikelcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin',function(){
   return view('admin.base');     
});
Route::get('home', [Homecontroller::class, 'showhome']); 
Route::get('blog', [Homecontroller::class, 'showblog']); 
Route::get('index', [Homecontroller::class, 'showindex']); 

Route::get('user', [Usercontroller::class, 'index']); 

Route::resource('user',UserController::class);
Route::get('/login', [AuthController::class, 'showlogin']);
Route::post('/login', [AuthController::class, 'LoginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'showregister']);
Route::post('register', [AuthController::class, 'storeregister']);

Route::get('Login', [AuthController::class, 'showLogin']);
Route::post('Login', [AuthController::class, 'LoginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('register', [AuthController::class, 'showregister']);
Route::post('register', [AuthController::class, 'storeregister']);


Route::resource('user',UserController::class);
Route::get('user', [Usercontroller::class, 'index']);
Route::get('user/create', [Usercontroller::class, 'create']);
Route::post('user', [Usercontroller::class, 'store']); 
Route::get('user/{user}', [Usercontroller::class, 'show']);  
Route::get('user/{user}/edit', [Usercontroller::class, 'edit']); 
Route::put('user/{user}', [Usercontroller::class, 'update']);  
Route::delete('user/{user}', [Usercontroller::class, 'destroy']); 


Route::resource('artikel',artikelController::class);
Route::get('artikel', [artikelcontroller::class, 'index']);
Route::get('artikel/create', [artikelcontroller::class, 'create']);
Route::post('artikel', [artikelcontroller::class, 'store']); 
Route::get('artikel/{artikel}', [artikelcontroller::class, 'show']);  
Route::get('artikel/{artikel}/edit', [artikelcontroller::class, 'edit']); 
Route::put('artikel/{artikel}', [artikelcontroller::class, 'update']);  
Route::delete('artikel/{artikel}', [artikelcontroller::class, 'destroy']); 