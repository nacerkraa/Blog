<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index(){
        $data =  User::all();
        return view('users', ['collection' =>$data]);
    }
}
