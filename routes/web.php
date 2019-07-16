<?php
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;

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
    if (Auth::guest()){
        return view('landing');
    }
    else {
        return redirect()->route('posts.index',['id'=>Auth::id()]);
    }
});



Route::resource('/users/{id}/posts','PostsController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
