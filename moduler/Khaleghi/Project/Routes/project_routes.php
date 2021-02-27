<?php


Route::group(["namespace" => "Khaleghi\Project\Http\Controllers", 'middleware' => ['web', 'auth', 'verified']], function ($router) {
    $router->resource('project', 'ProjectController');
});

Route::post('project/stroy', 'Khaleghi\Project\Http\Controllers@stroy');


