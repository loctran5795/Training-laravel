<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentsController extends Controller
{
    public function comments(Request $request, Post $post)
    {
        $post->comments()->create([
            'content' => $request->content,
            'user_id' => \Auth::user()->id
        ]);

        return redirect()->back();
    }

    
}
