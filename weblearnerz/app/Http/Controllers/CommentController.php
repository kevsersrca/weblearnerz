<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    //store comment method
    public function store(Requests\CommentStoreRequest $request)
    {
       \Auth::user()->comments()->create($request->all());
        return back()->withErrors('Comment Add');
    }
    //Delete comment method
    public function show($id)
    {
        Comment::findOrFail($id)->delete();
        return redirect()->back()->withErrors('Comment Deleted');
    }

}
