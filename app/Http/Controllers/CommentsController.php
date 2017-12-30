<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\Team;
use Illuminate\Support\Facades\Auth;
use App\Mail\CommentReceived;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
   public function __construct()
   {
    $this->middleware('forbiddenComments');
   }
    public function store(Request $request,$id)
    {

        $request->validate(
        ['text'=>'required|max:10']);

        $comment = new Comment();
        $comment->text = $request['text'];
        $comment->team_id = $id;
        $comment->user_id = Auth::user()->id;
        $comment->save();

        $team = Team::find($id);
        Mail::to($team->email)->send(new CommentReceived($team));

        return back ();

    }
}
