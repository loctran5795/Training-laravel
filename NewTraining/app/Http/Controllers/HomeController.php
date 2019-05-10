<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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


        // dd(\Auth::user()->posts());
        // dd(\Auth::posts()->comments());
        // dd(\Auth::posts()->comments());
        
        // DB::table('user')->get();
        $posts = Post::get();
    
        // dd($posts);

        return view('home', [
            'posts' => $posts,
            
        ]);
    }

    

}
