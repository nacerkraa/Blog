<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;

class MembersController extends Controller
{
    // show member by id
    public function showlist(){
        return Member::find(1) -> getQuestion;
    }

    // login 

    public function userLogin(){
        return "Hello this is login";
    }

    // add data

    public function MemberRegister(Request $req){

        $req -> validate([
            'email' => 'required|email|unique:users,email',
            'username' =>'required | max:10',
            'firstname' =>'required | max:10',
            'lastname' =>'required | max:10',
            'password' =>'required | min:5'
        ]);
  
        $member = new Member;
        
        $member -> username = $req -> username;
        $member -> firstname = $req -> firstname;
        $member -> lastname = $req -> lastname;
        $member -> email = $req -> email;
        $member -> password = $req -> password;
        $member -> age = $req -> age;
        $member -> save();

        $data = $req -> input();
        $req = session() -> put('user', $data['username']);

        return "Hello " . $data['username'];
    }

    // show data

    public function index(){
        $data =  Member::paginate(3);
        return view('users', ['collection' =>$data]);
    }

    // delete data


    public function userDelete($id){

        $data = Member::find($id);
        $data -> delete();

        return redirect('list');
        
    }

    // show specific data

    public function showData($id){

        $data = Member::find($id);

        return view('edit', ['data' => $data]);
        
    }

    // update data

    public function userUpdate(Request $req){

        $data = Member::find($req -> id);
        $data -> username = $req -> username;
        $data -> firstname = $req -> firstname;
        $data -> lastname = $req -> lastname;
        $data -> password = $req -> password;
        $data -> age = $req -> age;
        $data -> save();
        
        return redirect('list');
        
    }

}
