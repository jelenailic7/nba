<?php
namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Team;


class TeamComposer
{
    // protected $teams;
   
    // public function __construct(TeamRepository $teams)
    // {
    //     $this->teams=$teams;
    // }  

  
    public function compose(View $view)
    {
      $view->with('teams',Team::all());
    }
}