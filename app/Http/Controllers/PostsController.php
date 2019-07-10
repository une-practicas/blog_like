<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user)
    {   
        $posts = Post::all();
        return view("posts.index",["user"=>$user,"posts"=>$posts]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user)
    {
        return view("posts.create",["user"=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request ->title;
        $post->content = $request ->content;
        $post->img_src = '';
        $post->likes = 0;
        $post->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user,$id)
    {
        $post = Post::find($id);
        return view("posts.show",["post"=>$post]);
        // return "Hola desde show $user $id";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user,$id)
    {
        $post = Post::find($id);
        return view("posts.edit",["user"=>$user,"post"=>$post,"id"=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user,$id)
    {
        echo "update";
        $post = Post::find($id);
        $post->title = $request ->title;
        $post->content = $request ->content;
        // $post->img_src = '';
        // $post->likes = 0;
        $post->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user,$id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/users/'.$user.'/posts/');
        // echo "destroy";
    }
}
