<?php
namespace Khaleghi\Project\Providers;

use Illuminate\Support\ServiceProvider;

class ProjectServiceProvider extends ServiceProvider
{
public function register()
{
    $this->loadRoutesFrom(__DIR__ . '/../Routes/project_routes.php');
    $this->loadViewsFrom(__DIR__  .'/../Resources/Views/', 'project');
    $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
 
}

    public function boot()
    {
        config()->set('sidebar.items.project',[
            "icon"=>"i-courses ",
            "title"=>"پروژه ها",
            "url"=>url("project")
        ]);

}
}
