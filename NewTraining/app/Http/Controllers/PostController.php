<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;
// use App\Http\Controllers\Controller;
use App\Http\Requests\Users\CreatePostRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $posts = \Auth::user()->posts()->paginate();
        return view('post.index',[
            'posts' => $posts
        ]);
    }

    public function store(CreatePostRequest $request)
    {
        $user = \Auth::user();
        $user->posts()->create([
            'title' => $request->title,
            'content' => $request->content,
            'image_post' => $request->images->store('public/image-post'),
        ]);
 
        return redirect('/home');
    }

    public function show(Post $post)
    {
       $comments = $post->comments()->get();
       $likes = $post->likes()->get();

        return view('post.show', [
            'post' => $post,
            'comments' => $comments,
            'likes' => $likes
        ]);
    }

    public function create(Post $post)
    {
        return view('post.create');
    }

    public function edit(Post $post)
    {
        return view('post.edit', [
            'post' => $post
        ]);
    }

    public function update(CreatePostRequest $request, Post $post)
    {
        $post->update([
                'title' => $request->title,
                'content' => $request->content,
                'image_post' => $request->images->store('public/image-post')
            ]);
        return redirect('/home');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back();
    }

}
