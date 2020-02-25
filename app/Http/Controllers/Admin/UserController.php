<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index(){
        $user_data=User::all();
        return view('Admin.user_data.index',compact('user_data'));
    }
}
