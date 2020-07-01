<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Facade\FlareClient\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with("user")->limit(20)->get();
        foreach( $posts as $post ){
            $post -> setAttribute("user" ,  $post -> user );
            $post -> setAttribute("added_at" , $post -> created_at -> diffForHumans() );
            $post -> setAttribute("comments_count" , $post -> comments -> count() );    
        }
        return response() -> json( $posts );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
    */
    
    public function show( $slug )
    {
        
        $post = Post::where("slug" , $slug )->with(["category" , "user" , "comments"]) -> first();
        $post -> setAttribute("added_at" , $post -> created_at -> diffForHumans() );
        $post -> setAttribute("comments_count" , $post -> comments -> count() );


        $comments = $post -> comments;
        foreach( $comments as $comment ){
            $comment -> setAttribute("user" , $comment -> user );
            $comment -> setAttribute("added_at" , $post -> created_at -> diffForHumans() );
        }

        return response() -> json( $post );
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
