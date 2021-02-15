<?php
Route::group(["namespace" => "Khaleghi\ACL_Role\Http\Controllers", 'middleware' => ['web', 'auth', 'verified']], function ($router) {
    $router->resource('user_role', 'ACL_RoleController');
});
