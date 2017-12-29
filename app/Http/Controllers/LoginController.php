<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function __construct()
   {
       $this->middleware('guest');
    }

   public function destroy()
   {
       auth()->logout();

       return redirect('/teams');
   }
   public function create()
   {
       return view('/login.create');
   }
   public function store()
   {
    $user = User::where('email',request('email'))->where('verified',true)->first();
        if(!$user) {

        return back()->withErrors([
            'message'=>'Your email is not verified'
        ]);
    }


       if(!auth()->attempt(request(['email','password'])))
       {
           return back()->withErrors([
               'message'=>'Bad credentials.Please try again'
           ]);
       }
       return redirect('/teams');
   }
   public function verify($id)
   {
       $user = User::find($id);
       $user->verified = true;
       $user->save();

       auth()->login($user);

       return view ('teams.index')->with('user',$user);

   }
}
