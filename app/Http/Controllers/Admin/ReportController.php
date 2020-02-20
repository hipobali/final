<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Report;

class ReportController extends Controller
{
    public function index(){
        $report=Report::all();
        return view('Admin.report.index',compact('report'));
    }
}
