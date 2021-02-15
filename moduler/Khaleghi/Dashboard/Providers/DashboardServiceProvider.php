<?php
namespace Khaleghi\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function register()
    {
        //        config(sidebar);
        $this->loadRoutesFrom(__DIR__.'/../Routes/dashboard_routes.php');
        $this->loadViewsFrom(__DIR__.'/../Resources/View','Dashboard');
        $this->mergeConfigFrom(__DIR__.'/../config/sidebar.php','sidebar');
    }
    public function boot()
    {
            config()->set('sidebar.items.Dashboard',[
                "icon"=>"i-dashboard",
                "title"=>"پیشخوان",
                "url"=>url('home')
            ]);
    }


}
