<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ExploreUserController extends Controller
{
    //
    public function __invoke()
    {
        return view('user.index', [
            'users' => User::paginate(16),
        ]);
    }
}
