<?php
use App\Http\Controllers\PostsController;

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

Route::get('/', function () {
    // return "Hola 2";
    return view('landing');
});



Route::resource('/users/{id}/posts','PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
