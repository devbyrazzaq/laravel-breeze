<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowingController extends Controller
{
    
    public function index(User $user, $following)
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

    public function store(Request $request, User $user)
    {
        // dd('success');
        // if(Auth::user()->hasFollow($user))
        // {
        //     Auth::user()->unfollow($user);
        // } else {
        //     Auth::user()->follow($user);
        // }

        Auth::user()->hasFollow($user) ? Auth::user()->unfollow($user) : Auth::user()->follow($user);
        return back()->with("success", "You are follow the user");

    }
}
