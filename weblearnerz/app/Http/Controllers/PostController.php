<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Tag;
use App\Comment;

class PostController extends Controller
{
    /**
     * post all view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $post=Post::orderBy('id','desc')->paginate(10);
        return view('post.index',compact('post'));
    }

    /**
     * get post create view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $language=Language::get();
        $tag=Tag::get();
        return view('post.create',compact('tag','language'));
    }
    /**
     * post store method
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\PostStoreRequest $request)
    {
        $post=\Auth::user()->posts()->create($request->all());
        if($request->has('tags'))
        {
            $post->tags()->sync($request->tags, []);
        }
        return redirect()->back()->withErrors('Post Created!');
    }

    /**
     * Post only view
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $comments = Post::findOrFail($id)->comments()->get();
        $row = Post::findOrFail($id);
        return view('post.view',compact('row','comments','language'));
    }

    /**
     * get edit page
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $tag=Tag::all();
        $languages=Language::all();
        $tags2 = array();
        foreach ($tag as $tags) {
            $tags2[$tags->id] = $tags->name;
        }
        $update =\Auth::user()->posts()->findOrFail($id);
        return view('post.edit', compact('update','tag','languages'));
    }

    /**
     * update post method
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Requests\PostUpdateRequest $request, $id)
    {
        $post=\Auth::user()->posts()->find($id);
        $post->update($request->all());
        if ($request->has('tags'))
        {
            $post->tags()->sync($request->tags);
        }
        else
        {
            $post->tags()->sync(array());
        }
        return redirect()->back()->withErrors('Post Updated!');
    }

}
