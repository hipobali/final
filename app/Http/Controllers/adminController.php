<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Category;
use App\Foundation;
use App\foundationPost;
use App\Http\Requests\AdminPostRequest;
use App\People;
use App\Report;
use App\User;
use App\userPost;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Facades\Storage;

class adminController extends Controller
{
    public function index(){
        return view('Admin.admin_dashboard');
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
