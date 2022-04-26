<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserAuth;

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
    return redirect('home');
});

Route::view('home', 'home');
Route::view('admin', 'dashboard');
Route::view('register', 'registerForm');
Route::view('login', 'loginForm');
Route::view('upload', 'upload');

Route::post("userLogin",[UserAuth::class,'userLogin']);
Route::post("userRegister",[UserAuth::class,'userRegister']);

Route::get("list",[UsersController::class,'index']);
Route::get("delete/{id}",[UsersController::class,'userDelete']);
Route::get("update/{id}",[UsersController::class,'showData']);
Route::post("update",[UsersController::class,'userUpdate']);

Route::get('/lougout', function () {
    if (session() -> has('user')) {
        session() -> pull('user');
    }
    return redirect('home');
});

