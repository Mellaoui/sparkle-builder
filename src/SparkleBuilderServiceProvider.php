<?php

namespace Mellaoui\SparkleBuilder;

use Illuminate\Support\ServiceProvider;
class SparkleBuilderServiceProvider extends ServiceProvider
{

    public function boot(){

    }

    public function register(): void
    {
        $this->app->bind('sparkle-builder', function (){
            return new Sparkle();
        });
    }

}