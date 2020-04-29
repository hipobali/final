<?php

namespace App\Http\Controllers\Frontend;

use App\foundationPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class welcomeController extends Controller
{
    public function getWelcome()
    {
        $foundationPost=foundationPost::orderBy('id','desc')->paginate(3);
        return view('frontend.welcome',compact('foundationPost'));
    }

}
