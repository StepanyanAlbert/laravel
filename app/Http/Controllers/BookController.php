<?php

namespace App\Http\Controllers;

use App\Book;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    public function createbook(Request $request)
    {

       $this->validate($request,[
            'title' => 'required|min:4|max:25|string',
            'brief' => 'required|string|min:10|max:1000',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
]);
        $imageName = time().'-'.$request->file('image')->getClientOriginalName();
        $path = base_path() . '/public/images/';
        $request->file('image')->move($path , $imageName);
        $books=new Book();
        $books->title=$request['title'];
        $books->brief_intro=$request['brief'];
        $books->cover=$imageName;

        if($request->user()->books()->save($books))
        {
         return redirect()->route('homepage');
        }
        else
        {
       return redirect()->back();
        }
    }
   public function getHomepage()
   {    Session::set('name',Auth::user()->username);
       $books=Book::where('avatar_id',Auth::user()->id)->get();
       return view('main.homepage')->with(['books'=>$books]);
   }
}
