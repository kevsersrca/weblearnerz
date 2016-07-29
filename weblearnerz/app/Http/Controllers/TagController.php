<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;

class TagController extends Controller
{
    /**
     * Tag index page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tag=Tag::all();
        return view('tag.index',compact('tag'));
    }

    /**
     * Tag store page
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\TagStoreRequest $request)
    {
        Tag::create($request->all());
        return back()->withErrors('Tag Created!');
    }

    /**
     * Tag delete method
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show($id)
    {
        $tag = Tag::find($id);
        $tag->posts()->detach();
        $tag->delete();
        return redirect()->back()->withErrors('Deleted');
    }

}
