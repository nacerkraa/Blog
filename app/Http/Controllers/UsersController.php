<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
        return DB::select('select * from users');
    }
}
