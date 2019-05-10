<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\CreatePostRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PostsController extends Controller
{
    public function post()
    {
        return view('post.index');
    }

    public function createPost(CreatePostRequest $request)
    {
        // dd(request()->all());
        // dd($request->title);
        // Storage::fake('images');
        // $fille = UploadedFile::fake()->image();
        // dd($user);
        // $user->posts()->create(request()->all());

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
        return view('post.show');
    }


    // public function storage(CreatePostRequest $request)
    // {
    //     $user = \Auth::user();
    //     $user->posts()->create([
    //         'title' => $request->title,
    //         'content' => $request->content,
    //         'image_post' => $request->images->store('public/image-post'),
    //     ]);

    //     return redirect('/home');
    // }

    // public function show(Post $post)
    // {
    //     return view('post.show');
    // }
    

}
