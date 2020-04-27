<?php

namespace App\Http\Controllers\Admin;

use App\userPost;
use App\Http\Controllers\Controller;

class PeoplePostController extends Controller
{
    public function index()
    {
        $people_post=userPost::all();
        return view('Admin.people_post.index',compact('people_post'));
    }

    public function destroy($id)
    {
        foundationPost::where('user_post_id',$id)->delete();
        userPost::find($id)->delete();
        return redirect()->back()->with(['message'=>'User Post deleted successfully !!']);
    }
}
