<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function test(Request $request)
    {
        $user = \Auth::user();

        $user->tests()->create([
            'name' => $request->ten,
            'content' => $request->noidung,
        ]);
        
        return redirect('/home');
    }
}
