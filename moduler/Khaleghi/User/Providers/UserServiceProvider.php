<?php


namespace Khaleghi\User\Providers;


use Khaleghi\User\Models\User;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        config()->set('auth.providers.users.model', User::class);
        $this->loadRoutesFrom(__DIR__ . '/../Routes/user_routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../Database/Factories');
        $this->loadViewsFrom( __DIR__ . '/../Resources/Views', 'User');
    }
    public function boot()
    {
        config()->set('sidebar.items.users',[
            "icon"=>"i-users",
            "title"=>"کاربران",
            "url"=>route("users.index")
        ]);
    }
}
