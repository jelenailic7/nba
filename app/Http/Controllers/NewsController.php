<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\User;
use App\Team;
class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('user')->paginate(10); 
      return view('news.index')->with('news',$news);
    }
    public function show($id)
    {
        $oneNews = News::with('teams')->find($id);
        return view('news.show',compact(['oneNews']));
    }
    // public function teamNews(Team $team)
    // {
    // $news = $team->news()->with('user')->get();
    // return view ('teams.news',compact('news'));
    // }
}
