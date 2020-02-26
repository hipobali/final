<?php

namespace App\Http\Controllers\Admin;

use App\foundationPost;
use App\Http\Controllers\Controller;

class FoundationPostController extends Controller
{
    public function index()
    {
        $foundation_post=foundationPost::all();
        return view('Admin.foundation_post.index',compact('foundation_post'));
    }

    public function destroy($id)
    {
        foundationPost::find($id)->delete();
        return redirect()->back()->with(['message'=>'Foundation Post deleted successfully !!']);
    }
}
