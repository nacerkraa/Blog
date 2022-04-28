<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\QuestionsController;

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

Route::post("userLogin",[MembersController::class,'userLogin']);
Route::post("userRegister",[MembersController::class,'MemberRegister']);

Route::get("listQuesions",[QuestionsController::class,'showList']);
Route::get("listMembers",[MembersController::class,'showList']);


Route::get("list",[MembersController::class,'index']);
Route::get("delete/{id}",[MembersController::class,'userDelete']);
Route::get("update/{id}",[MembersController::class,'showData']);
Route::post("update",[MembersController::class,'userUpdate']);

Route::get('/lougout', function () {
    if (session() -> has('user')) {
        session() -> pull('user');
    }
    return redirect('home');
});

