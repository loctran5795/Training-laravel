<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\ContactMail;
use App\Notifications\TestMail;

class ContactController extends Controller
{
    public function contact()
    {
        $user = \Auth::user();
        $user->notify(
            (new ContactMail())->delay(now()->addSeconds(10))
        );

        return redirect()->back();
    }
    
}
