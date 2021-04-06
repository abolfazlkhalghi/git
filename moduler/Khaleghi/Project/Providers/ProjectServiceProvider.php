<?php
namespace Khaleghi\Project\Providers;

use DatabaseSeeder;
use DB;
use Illuminate\Support\ServiceProvider;
use Khaleghi\Project\Database\Seeds\RolePermissionTableSeeder as SeedsRolePermissionTableSeeder;
use RolePermissionTableSeeder;

class ProjectServiceProvider extends ServiceProvider
{
public function register()
{
    $this->loadRoutesFrom(__DIR__ . '/../Routes/project_routes.php');
    $this->loadViewsFrom(__DIR__  .'/../Resources/Views/', 'project');
    $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    $this->loadJsonTranslationsFrom(__DIR__.'/../Resources/lang/');
    DatabaseSeeder::$seeders[] = SeedsRolePermissionTableSeeder::class;

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
