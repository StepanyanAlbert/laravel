<?php

namespace App\Http\Controllers;

use App\Avatar;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public $username;
    public function Login(Request $request)
    {
        $this->validate($request,[
            'username'=>'required|min:5',
            'password'=>'required|min:6'
        ]);

        if(Auth::attempt(['username'=>$request['username'],'password'=>$request['password']]))
        {
            Session::set('name',$request['username']);
            return redirect()->route('getdashboard');

        }else{
            return redirect()->back()->withErrors([
                'error' => 'These credentials do not match our records.',
            ]);
        }
    }
    public function  getdashboard()
    {
        return   view('main.dashboard');
    }
    public function SignUp(Request $request)
    {
        $this->validate($request, [
            'username'=>'required|min:5|max:12|unique:avatars',
            'password'=>'required|min:6|max:12',
            'email'=>'required|email|unique:avatars'
        ]);
        $avatar=new Avatar();
        $avatar->username=$request['username'];
        $avatar->email=$request['email'];
        $avatar->password=bcrypt($request['password']);
        $avatar->save();
        Auth::login($avatar);
        return redirect()->route('homepage')->with(array('name'=>$request['username']));

    }
  
    public function logout()
    {
        Auth::logout();
        return  view('welcome.login');
    }
    public function getlogin()
    {
        return view('welcome.login');
    }

}
