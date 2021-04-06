<?php

Route::group(["namespace" => "Khaleghi\Category\Http\Controllers", 'middleware' => ['web', 'auth', 'verified']], function ($router) {
    $router->resource('/', 'FrontController');
});