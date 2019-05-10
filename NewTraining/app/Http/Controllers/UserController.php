<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\TestMail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Users\ChangePasswordRequest;

class UserController extends Controller
{
    public function sentMail()
    {
        $user = \Auth::user();
        $user->notify(
            (new TestMail())->delay(now()->addSeconds(10))
        );
        return redirect()->back();
    }

    public function update()
    {
        return view('update.index');
    }

    public function updateFile(Request $request)
    {
        $user = \Auth::user();
        $params = $request->all();
        if ($request->images) {
            $params['images'] = $request->images->store('public/image-user');
        }

        // dd($user->password);
        $user->fill($params);
        $user->save();
        
        return redirect()->back();
    }
    
    // public function changePassword(ChangePasswordRequest $request)
    // {
    //     $user = \Auth::user();
    //     $datas = $request->all();
    //     if (!Hash::check('passwordToCheck', $user->password)) {
    //         return redirect()->back();    
    //     }

    //     $user->fill([
    //         'password' => Hash::make($request->newPassword),
            
    //     ]);

    //     $user->save();
    //     // dd($user);
    //     return redirect()->back();
    // }

    public function change()
    {
        return view('change.index');
    }

    public function changePassword()
    {
        request()->validate([
            'old_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);
      
        if (\Hash::check(request()->old_password, \Auth::user()->password)) {
            \Auth::user()->update(['password'=>bcrypt(request()->password)]);

            session()->flash('success', 'Password has been update successfully.');
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
