<?php

namespace Khaleghi\front\Providers;

use Illuminate\Support\ServiceProvider;

class FrontServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../Routes/front_routes.php");
        $this->loadViewsFrom(__DIR__ . "/../Resources/view/", "front");
    }
    public function register()
    {
    }
}
