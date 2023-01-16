<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    
    public function __invoke(User $user, $following)
    {

        if($following !== "following" && $following !== "follower"){
            return redirect(route('profile.info', $user->username));
        }



        return view('user.following', [
            'user' => $user,
            'follows' => $following == "following" ? $user->follows : $user->followers,
        ]);
    }
    
    // public function following(User $user)
    // {
    //     return view('user.following', [
    //         'user' => $user,
    //         'follows' => $user->follows()->get(),
    //     ]);
    // }

    // public function follower(User $user)
    // {
    //     return view('user.following', [
    //         'user' => $user,
    //         'follows' => $user->followers()->get(),
    //     ]);
    // }
}
