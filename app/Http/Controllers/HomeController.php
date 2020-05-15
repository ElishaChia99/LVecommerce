<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Purchase;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        // $user = User::find($user_id);
        $posts = Post::where('user_id',$user_id)->get();
        $purchase = Purchase::where('user_id',$user_id)->get();
        return view('home')->with('posts', $posts)->with('purchase', $purchase);
    }
}
