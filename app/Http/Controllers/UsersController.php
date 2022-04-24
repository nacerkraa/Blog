<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getData(Request $req){
        $req -> validate([
            'user' =>'required | max:10',
            'password' =>'required | min:5'
        ]);
        $data = $req -> input();
        return "Hello " . $data['user'] . ", your password is: ". $data['password'];
    }

    public function index(){
        $data =  User::all();
        return view('users', ['collection' =>$data]);
    }
}
