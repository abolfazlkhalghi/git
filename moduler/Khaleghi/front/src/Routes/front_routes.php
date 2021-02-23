<?php
Route::group(['middleware'=>['web'],'namespace'=>'Khaleghi\front\Http\controllers'],
function($router){
    $router->get('/','FrontController@index')
});
