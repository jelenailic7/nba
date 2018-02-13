<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = ['id'];

    public $table = 'news';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function teams(){
        return $this->belongsToMany(Team::class,'news_team');
    }
   
}
