<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;

class AdminDataController extends Controller
{
    public function index()
    {
        $admin_data=Admin::all();
        return view('Admin.admin_data.index',compact('admin_data'));
    }
    
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        Admin::find($id)->delete();
        return redirect()->back()->with(['message'=>'Admin deleted successfully !!']);
    }
}
