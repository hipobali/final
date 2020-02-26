<?php

namespace App\Http\Controllers\Admin;
use App\Foundation;
use App\Http\Controllers\Controller;

class FoundationDataController extends Controller
{
    public function index()
    {
        $foundation=Foundation::all();
            return view('Admin.foundation_data.index',compact('foundation'));
    }

    public function destroy($id)
    {
        Foundation::find($id)->delete();
        return redirect()->back()->with(['message'=>'Foundation  deleted successfully !!']);
    }

}
