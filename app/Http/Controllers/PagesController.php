<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to my page';
        //2 way to pass the data 
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = "Welcome to about page";
        return view('pages.about')->with('title', $title);
    }
}
