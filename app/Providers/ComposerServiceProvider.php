<?php

namespace App\Providers;
use App\Team;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'partials.sidebar',
        //    'App\Http\ViewComposers\TeamComposer'
        function ($view) {
            $view->with('teams', Team::all()); }   //moze oba nacina 
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Http\ViewComposers\TeamComposer'); //moze i ne mora
    }
}
