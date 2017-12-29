<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\Team;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
   public function __construct()
   {
    $this->middleware('forbidenComments')->only('store');
   }
    public function store(Request $request,$id)
    {

        $request->validate(
        ['text'=>'required']);

        $comment = new Comment();
        $comment->text = $request['text'];
        $comment->team_id = $id;
        $comment->user_id = Auth::user()->id;
        $comment->save();

        return back();

    }
}
