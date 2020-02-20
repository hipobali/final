<?php

namespace App\Http\Controllers\Admin;
use App\Foundation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoundationDataController extends Controller
{
    public function index(){
        $foundation=Foundation::all();
            return view('Admin.foundation_data.index',compact('foundation'));
    }

}
