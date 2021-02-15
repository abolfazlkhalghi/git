<?php


namespace Khaleghi\ACL_Role\Providers;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Illuminate\Auth\Access\Gate as GateContract;

class RoleServiceProvider extends ServiceProvider
{
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        $gate->define('IsAdmin',function ($user){
           return $user->role =="IsAdmin";
        });
        $gate->define('IsOperator',function ($user){
           return $user->role =="IsOperator";
        });
        $gate->define('IsUser',function ($user){
           return $user->role =="IsUser";
        });
    }
}
