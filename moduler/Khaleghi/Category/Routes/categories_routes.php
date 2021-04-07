<?php
Route::prefix('admin')->group(function () {


Route::group(["namespace" => "Khaleghi\Category\Http\Controllers", 'middleware' => ['web', 'auth', 'verified']], function ($router) {
    $router->resource('categories', 'CategoryController');
});
});

