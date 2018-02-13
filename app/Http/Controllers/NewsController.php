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
    public function create()
    {
        $teams = Team::all();
        return view('news.create',compact('teams'));
    
    }
    public function store(Request $request,$id)
    {

        $request->validate(
        ['title'=>'required|max:10',
        'content'=>'required|max:300',
        'teams'=>'required|array']);

        $news = new News();
        $news->title = $request['title'];
        $news->content = $request['content'];
        $news->teams()->attach(request('teams')); 
        $news->user_id = Auth::user()->id;

        $news->save();

    
        $request->session()->flash('status', 'Task was successful!');
        return redirect('/news');

    }
  
}
