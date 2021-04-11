<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin');
Route::prefix('/user')->group(function () {
    Route::get('/','UserController@index')->name('user');

});


Route::get('/test', function () {
    $name='manage category_permissions';
    // \Spatie\Permission\Models\Permission::create(['auther']);
    auth()->user()->givePermissinTo('auther');
    return auth()->user()->permissions;
});
Route::group(['middleware' => 'web'], function () {
Auth::routes(['verify'=>true]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});
