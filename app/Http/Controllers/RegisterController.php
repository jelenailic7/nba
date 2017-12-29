<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\User;
use App\Mail\VerifyMail;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
   public function create()
   {
       return view('register.create');
   }
   public function store()
   {
       $this->validate(request(),
       ['name'=>'required',
       'email'=>'required | email',
       'password'=>'required | min:6|confirmed',
       'password_confirmation'=>'required | min:6'
       ]);
    $user = new User();
    $user->name = request('name');
    $user->email = request('email');
    $user->password = bcrypt(request('password'));
    $user->save();

    Mail::to($user)->send(new VerifyMail($user));

    auth()->login($user);
    return redirect('/login');
   }
}
