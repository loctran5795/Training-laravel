<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DeleteController extends Controller
{
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back();
    }
}
