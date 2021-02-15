<?php
namespace Khaleghi\ACL_Role\Providers;



use Illuminate\Support\ServiceProvider;

class ACLRoleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/user_role_routes.php');
        $this->loadViewsFrom(__DIR__. '/../Resources/view/','AClRole');
    }

public function boot()
{
    config()->set('sidebar.items.AClRole',[
        "icon"=>"i-users",
        "title"=>"کاربران",
        "url"=>url("user_role.index")
    ]);
}

}
