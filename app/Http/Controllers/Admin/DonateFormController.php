<?php

namespace App\Http\Controllers\Admin;

use App\donateForm;
use App\Http\Controllers\Controller;

class DonateFormController extends Controller
{
    public function index()
    {
        $donate_form=donateForm::all();
        return view('Admin.donate_form.index',compact('donate_form'));
    }

    public function destroy($id)
    {
        donateForm::find($id)->delete();
        return redirect()->back()->with(['message'=>'Donate Form deleted successfully !!']);
    }
}
