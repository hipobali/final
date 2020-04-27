<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\People;

class PeopleDataController extends Controller
{
    public function index()
    {
        $people=People::all();
        return view('Admin.people_data.index',compact('people'));
    }

    public function destroy($id)
    {
        User::where('id',$id)->delete();
        People::find($id)->delete();
        return redirect()->back()->with(['message'=>'People deleted successfully !!']);
    }
}
