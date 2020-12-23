<?php

namespace Trapzpro\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;
use Trapzpro\ChuckNorrisJokes\JokeFactory;



class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        # code...
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function(){
            return new JokeFactory();
        });
    }

}