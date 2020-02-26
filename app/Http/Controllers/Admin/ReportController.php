<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Report;

class ReportController extends Controller
{
    public function index()
    {
        $report=Report::all();
        return view('Admin.report.index',compact('report'));
    }
     public function destroy($id)
    {
        Report::find($id)->delete();
        return redirect()->back()->with(['message'=>'User Post deleted successfully !!']);
    }
}
