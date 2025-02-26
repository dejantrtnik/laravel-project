<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$title = 'post index';
        //return view('post.index')->with('title', $title);

                /** 
         * use App\Models\Post;
         */
        
        //$posts = Post::all();

        /**
         * orderBy
         */
        $posts = Post::orderBy('title', 'desc')->get();
        
        /**
         * limit
         */
        //$posts = Post::orderBy('title', 'desc')->take(2)->get();

        /**
         * where
         */
        //return Post::where('title', 'Post two')->get();
        
        /**
         * pagination
         */
        $posts = Post::orderBy('id', 'desc')->paginate(5);

        /**
         * use DB;
         */
        //$posts = DB::select('SELECT * FROM posts');

        return  view('post.index')->with('posts', $posts);
        //return view('posts.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
