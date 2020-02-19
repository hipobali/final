<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDataController extends Controller
{
    public function index(){
        $admin_data=Admin::all();
        return view('Admin.admin_data.index',compact('admin_data'));
    }
}
