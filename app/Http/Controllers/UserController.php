<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function createUser(){
            return view('register');
    }
    public function saveUser(Request $request){
        $fields = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed'
        ]);
        $user = User::create($fields);
        
        Auth::login($user);
        return redirect()->route('lessons');
    } 
    public function loginUser(){
            return view('login');
    }
    public function loggedUser(Request $request){
          $fields = $request->validate([
              'email'=>'required',
              'password'=>'required']);
              $user = User::where('email',$request->email)->first();
              if($user->password == $fields['password']){
                  Auth::login($user);
                  return redirect()->route('lessons');              }
              return "cant login";
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('lessons');
    }

}
