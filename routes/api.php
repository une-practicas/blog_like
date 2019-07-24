<?php

use Illuminate\Http\Request;
use App\Post;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/posts',function(){
    $datos = Post::all();
    $json = [];
    foreach($datos as $dato){
        $arr2 = [

            'title'=>$dato->title,
            'created_at'=>$dato->created_at,
            'content'=>$dato->content,
            'user_url'=>URL::to('/api/users/')."/$dato->user_id"
        ];

        $json[$dato->id] = $arr2;
    }
    return response()->json($json,200,[],JSON_UNESCAPED_SLASHES);
});

Route::get('/users/{userid}/',function($userid){
    $user = User::find($userid);
    $json = [
        'name' => $user->name,
        'email' => $user->email,
        'created_at' => $user->created_at
    ];

    return response()->json($json,200,[],JSON_UNESCAPED_SLASHES);
});

Route::get('/users/{userid}/posts/',function($userid){
    $posts = Post::where('user_id', $userid) -> get();
    $json = [];
    foreach( $posts as $post ){
        $json["p".$post->id] = [
            'title' => $post->title,
            'content' => $post->content,
            'url' => request()->url()."/$post->id/"
        ];
    }
    return response()->json($json,200,[],JSON_UNESCAPED_SLASHES);
});


Route::get('/users/{userid}/posts/{postid}',function($postid){
    $post = Post::find($postid);
    $json = [
        'id' => $post->id,
        'title' => $post->title,
        'content' => $post->content
    ];
    return $json;
});