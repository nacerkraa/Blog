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

    public function userDelete($id){

        $data = User::find($id);
        $data -> delete();

        return redirect('list');
        
    }

    public function showData($id){

        $data = User::find($id);

        return view('edit', ['data' => $data]);
        
    }

    public function userUpdate(Request $req){

        $data = User::find($req -> id);
        $data -> username = $req -> username;
        $data -> firstname = $req -> firstname;
        $data -> lastname = $req -> lastname;
        $data -> password = $req -> password;
        $data -> age = $req -> age;
        $data -> save();
        
        return redirect('list');
        
    }
}
