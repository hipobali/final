<?php

namespace App\Http\Controllers\Admin;

use App\userPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeoplePostController extends Controller
{
    public function index(){
        $people_post=userPost::all();
        return view('Admin.people_post.index',compact('people_post'));
    }
}
