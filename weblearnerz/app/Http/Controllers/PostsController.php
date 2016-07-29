<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostsController extends Controller
{
    /**
     * get user's posts
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $post=\Auth::user()->posts()->orderBy('id','desc')->paginate(10);
        return view('post.posts',compact('post'));
    }

    /**
     * post delete method
     * @param $id
     * @return $this
     */
    public function show($id)
    {
        $post =Post::find($id);
        $post->tags()->detach();
        $post->delete();
        return view('home')->withErrors('Deleted');
    }


}
