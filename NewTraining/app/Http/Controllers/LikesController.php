<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LikesController extends Controller
{
    public function changeLike(Request $request, Post $post)
    {
        $like = $post->likes()
                    ->where('user_id', \Auth::user()->id )
                    ->first();
        
        if($like) {
            \Auth::user()->likes()->delete();
            
        } else {
            \Auth::user()->likes()->create([
                'post_id' => $post->id
            ]);
        }

        // $post->likes()->create([
        //     'user_id' => \Auth::user()->id
        // ]);

        // $likes = \App\Models\Like::where('user_id', \Auth::user()->id)->first();
        
        // if($likes) {
        //     $post->likes()->delete();
        // } else {
        //     $post->likes()->create([
        //         'user_id' => \Auth::user()->id
        //     ]);
        // }

        return redirect()->back();
    }
}
