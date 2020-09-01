<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getSignup(){
        return view('user.signup');
    }
    
    public function postSignup(Request $request){

    $this->validate($request,[
        'name' => 'required',
        'email' => 'email|required|unique:users',
        'password' => 'required|min:4',
    ]);
    $user = new User([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
    ]);
    $user->save();
    // return redirect()->route('user.profile');
    return redirect("home");
    }
    // public function getProfile(){
    //     return view('user.profile');
    // }
    public function getSignin()
    {
    return view('user.signin');
    }
    public function postSignin(Request $request)
    {
   $this->validate($request,[
   'email' => 'email|required',
   'password' => 'required|min:4'
    ]);
    if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
    // return redirect()->route('user.profile');
    return redirect("home");
    }
    return redirect()->back();
    }
    
   

}