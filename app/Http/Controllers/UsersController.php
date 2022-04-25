<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index(){
        $data =  User::paginate(3);
        return view('users', ['collection' =>$data]);
    }
}
