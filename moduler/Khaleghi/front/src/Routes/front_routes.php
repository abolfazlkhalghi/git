<?php

Route::group(["namespace" => "Khaleghi\Category\Http\Controllers"], function ($router) {
    $router->resource('/', 'FrontController');
});
