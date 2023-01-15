<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StatusController extends Controller
{
    public function store(StatusRequest $request)
    {
        Auth::user()->makeStatus($request->body);

        return redirect()->back();
    }
}
