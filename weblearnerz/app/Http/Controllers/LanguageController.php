<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;

use App\Http\Requests;
class LanguageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * index view page
     */
    public function index()
    {
        $language=Language::all();
        return view('language.index',compact('language'));
    }

    /**
     * Language store method
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\LanguageStoreRequest $request)
    {
        Language::create($request->all());
        return back()->withErrors('Language Created!');
    }

    /**
     * Language delete method
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show($id)
    {
        $language = Language::find($id);
        $language->posts()->detach();
        $language->delete();
        return redirect()->back()->withErrors('Language Deleted!');
    }

}
