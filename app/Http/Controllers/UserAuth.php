<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

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
          'email' => 'required|email|unique:users,email',
          'username' =>'required | max:10',
          'firstname' =>'required | max:10',
          'lastname' =>'required | max:10',
          'password' =>'required | min:5'
      ]);

        $user = new User;
        
        $user -> username = $req -> username;
        $user -> firstname = $req -> firstname;
        $user -> lastname = $req -> lastname;
        $user -> email = $req -> email;
        $user -> password = $req -> password;
        $user -> age = $req -> age;
        $user -> save();

        $data = $req -> input();
        $req = session() -> put('user', $data['username']);

        return "Hello " . $data['username'] ;
    }

}
