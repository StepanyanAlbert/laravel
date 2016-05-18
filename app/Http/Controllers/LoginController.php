<?php

namespace App\Http\Controllers;

use App\Avatar;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
        $this->validate($request,[
            'username'=>'required|min:5',
            'password'=>'required|min:6'
        ]);

        if(Auth::attempt(['username'=>$request['username'],'password'=>$request['password']]))
        {
            return view('welcome.dashboard',['name'=>$request['username']]);
        }else{
            return redirect()->route('signup');
        }
    }
    public function SignUp(Request $request)
    {
        $this->validate($request, [
           'username'=>'required|min:5|max:12|string|unique:avatars',
            'password'=>'required|min:6|max:12',
            'email'=>'required|email|unique:avatars'
        ]);
        $avatar=new Avatar();
        $avatar->username=$request['username'];
        $avatar->email=$request['email'];
        $avatar->password=bcrypt($request['password']);
        $avatar->save();
        Auth::login($avatar);
        return redirect()->route('dashboard')->with(array('name'=>$request['username']));

    }
    public function gedDashboard()
    {
        return view('welcome.dashboard');
    } 
    public function logout()
    {
        Auth::logout();
        return  view('welcome.welcome');
    }
    public function getlogin()
    {
        return view('welcome.welcome');
    }
}
