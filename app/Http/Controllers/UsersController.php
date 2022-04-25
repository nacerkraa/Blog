<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index(){
        $data =  User::all();
        echo session('user') . "<br><br>";
        return view('users', ['collection' =>$data]);
    }
}
