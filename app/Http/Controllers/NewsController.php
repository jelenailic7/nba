<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\User;
class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('user')->paginate(10); //eager loading, from 141.9->68.9
      return view('news.index')->with('news',$news);
    }
    public function show($id)
    {
        $oneNews = News::find($id);
        return view('news.show',compact(['oneNews']));
    }
   
  
}
