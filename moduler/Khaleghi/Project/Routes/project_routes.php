<?php


Route::group(["namespace" => "Khaleghi\Project\Http\Controllers", 'middleware' => ['web', 'auth', 'verified']],
function ($router) {
    $router->resource('project', 'ProjectController');
});

// Route::post('project/stroy', 'Khaleghi\Project\Http\Controllers@stroy');

// Route::prefix('project'["namespace" => "Khaleghi\Project\Http\Controllers", 'middleware' => ['web', 'auth', 'verified']],function ($router) {
//     Route::get('/', 'ProjectController@index')->name('adminArticle');
//     Route::get('/create', 'ProjectController@create')->name('adminArticleCreate');
//     Route::post('/store', 'ProjectController@store')->name('adminArticleStore');
//     Route::get('/edit/{Article}', 'ProjectController@edit')->name('adminArticleEdit');
//     Route::post('/update/{Article}', 'ProjectController@update')->name('adminArticleUpdate');
//     Route::get('/destroy/{Article}', 'ProjectController@destroy')->name('adminArticleDestroy');
// })->name('updatestatus');
