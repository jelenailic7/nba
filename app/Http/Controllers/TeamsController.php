<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
   public function __construct()
   {
        $this->middleware('auth',['except'=>'index']);
   }

    public function index() {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    public function show($id) {
        $team = Team::with('comments')->find($id);
        return view('teams.show', compact('team'));
    }

    public function getTeamNews(Team $team)
    {
        $news = $team->news()->paginate(3);
        return view('teams.news',compact('news'));
    }


}
