<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    //get home page
    public function index()
    {
        return view('home');
    }
}
