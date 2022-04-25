<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function userLogin(Request $req){
        
        $data = $req -> input();
        $req = session() -> put('user', $data['user']);
        echo session('user') . "<br><br>";
        return "Hello " . $data['user'] . ", your password is: ". $data['password'];
    }

    public function userRegister(Request $req){
        $req -> validate([
            'user' =>'required | max:10',
            'password' =>'required | min:5'
        ]);
        $data = $req -> input();
        $req = session() -> put('user', $data['user']);
        DB::table('users')->insert(['email'=> $data['email'],'firstname'=> $data['user'],'password'=>$data['password']]);
        return "Hello " . $data['user'] . ", your password is: ". $data['password'];
    }
}
