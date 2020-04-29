<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Foundation;
use App\foundationPost;
use App\Http\Requests\AdminPostRequest;
use App\People;
use App\Report;
use App\User;
use App\userPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function index(){
        $user=User::all();
        $foundation=Foundation::all();
        $people=People::all();
        $admin=Admin::all();
        $userpost=userPost::all();
        $foundationpost=foundationPost::all();
        $report=Report::all();
        return view('Admin.admin_dashboard',compact('user','foundation','people','admin','userpost','foundationpost','report'));
    }

    public function postAdminRegister(AdminPostRequest $request)
    {
        $user=new User();
        $user->type='admin';
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->save();

        $admin=new Admin();
        $admin->user_id=$user->id;
        $admin->secret=$request['secret'];
        if ($request['secret']=='easydonate@5'){
            $admin->save();
            return view('auth.login.admin');
        }else{
            User::find($user->id)->delete();
            return redirect()->back()->with(['error'=>'Your secret code is invalid']);
        }
    }
    
    public function logout(Request $request) {
    $request->session()->flush();
        return redirect('/');
    }
}
