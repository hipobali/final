<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\donateForm;
use App\Foundation;
use App\foundationPost;
use App\Http\Requests\FoundationRegisterRequest;
use App\Report;
use App\User;
use App\userPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoundationController extends Controller
{

    public function getFoundationRegister()
    {
        return view('auth.register.foundation_register');
    }

    public function getFoundationLogin(){
        return view('foundation_login');
    }

    public function getFoundationRequestView()
    {
        $donateForm=donateForm::orderBy('id','desc')->get();
        $user_post=userPost::orderBy('id','desc')->get();
        $foundation=Foundation::all();
        $foundationPost=foundationPost::all();
        $category=Category::all();
        return view('foundation_request_page',compact('donateForm','user_post','foundation','category','foundationPost'));
    }

    public function postFoundationRegister(FoundationRegisterRequest $request)
    {
        //profile
        $input = $request->all();
        $name = uniqid('foundation_profile-') . '.' . $input['foundation_profile']->extension();
        $input['foundation_profile'] = isset($input['foundation_profile']) ? \Storage::disk('uploads')->putFileAs('foundation_profile', $input['foundation_profile'], $name) : '';
        //Certificate
        $name = uniqid('foundation_certificate-') . '.' . $input['foundation_certificate']->extension();
        $input['foundation_certificate'] = isset($input['foundation_certificate']) ? \Storage::disk('uploads')->putFileAs('foundation_certificate', $input['foundation_certificate'], $name) : '';

        $user=new User();
        $user->type='foundation';
        $user->name=$request['founder'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->save();

        $foundation = new Foundation();
        $foundation->user_id = $user->id;
        $foundation->foundation_profile=$input['foundation_profile'];
        $foundation->foundation_name = $request['foundation_name'];
        $foundation->year_picker=$request['year_picker'];
        $foundation->month_picker=$request['month_picker'];
        $foundation->day_picker=$request['day_picker'];
        $foundation->address = $request['address'];
        $foundation->phone = $request['phone'];
        $foundation->president_name=$request['president_name'];
        $foundation->foundation_certificate=$input['foundation_certificate'];
        $foundation->member_count=$request['member_count'];
        $foundation->save();
        return view('auth.login.foundation');
    }

    public function postFoundationRequest(Request $request)
    {

        $id=$request['id'];
        $foundation=Foundation::where('user_id',$id)->first();
        $input = $request->all();

        if($request->hasFile('f_post_image')){
            $name = uniqid('foundation_post-') . '.' . $input['f_post_image']->extension();
            $input['f_post_image'] = isset($input['f_post_image']) ? \Storage::disk('uploads')->putFileAs('foundation_post', $input['f_post_image'], $name) : '';
            $foundation_post=new foundationPost();
            $foundation_post->user_id=$foundation->user_id;
            $foundation_post->foundation_id=$foundation['id'];
            $foundation_post->f_post_detail=$request['f_post_detail'];
            $foundation_post->f_post_image= $input['f_post_image'];
            $foundation_post->f_post_category=$request['f_post_category'];
            $foundation_post->save();
            return redirect()->back();
        }
            $foundation_post=new foundationPost();
            $foundation_post->user_id=$foundation->user_id;
            $foundation_post->foundation_id=$foundation['id'];
            $foundation_post->user_post_id=$request['user_post_id'];
            $foundation_post->f_post_detail=$request['f_post_detail'];
            $foundation_post->f_post_category=$request['f_post_category'];
            $foundation_post->save();
            return redirect()->back();

    }
    
    public function postFoundationReport(Request $request)
    {
        $report_form=new Report();
        $report_form->user_post_id=$request['id'];
        $report_form->report_foundation_name=$request['name'];
        $report_form->report_foundation_option=$request['option'];
        $report_form->save();
        return redirect()->back()   ;
    }

    public function foundationPostDataDelete(Request $request)
    {
        $id=$request['id'];
        $foundation_post=foundationPost::whereId($id)->first();
        $foundation_post->delete();
        return redirect()->back();
    }

}
    