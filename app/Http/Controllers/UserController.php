<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function interactions()
    {
        $interactions = \Auth::user()->interactions()->paginate(1);

        return view('posts.interactions', compact('interactions'));

    }
}
