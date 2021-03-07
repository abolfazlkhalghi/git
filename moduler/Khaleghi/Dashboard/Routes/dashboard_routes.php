<?php
Route::group(['namespace'=>'Khaleghi\Dashboard\Http\Controllers','middleware'=>['web','auth']],function ($router){
        $router->get('/home', 'DashboardController@home')->name('home');
});



