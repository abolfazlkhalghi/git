<?php
Route::group(["namespace" => "Khaleghi\Project\Http\Controllers", 'middleware' => ['web', 'auth']], function ($router) {
    $router->resource('project', 'projectController');
    $router->post('project/store', 'projectController@store')->name('project.store');
});
// Route::group(
//     ["namespace" => "Khaleghi\Project\Http\Controllers", 'middleware' => ['web', 'auth', 'verified']],
//     function ($router) { $router->resource('project', 'ProjectController');}  
// );
