<?php

namespace App\Http\Controllers\Frontend;
use App\People;
use App\Category;
use App\Foundation;
use App\foundationPost;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\userPost;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{   
    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_post=userPost::all();
        $foundation_post=foundationPost::orderBy('id','desc')->paginate(6);
        $foundation=Foundation::all();
        $category=Category::all();
            return view('home',compact('user_post','foundation','foundation_post','category'));
        }

    public function getSearchCategory(Request $request)
    {
        $q=$request['q'];
        $user_post=userPost::all();
        $foundation=Foundation::all();
        $category=Category::all();
        if($q=='All'){
              $foundation_post=foundationPost::orderBy('id','desc')->paginate(6);
              return view('home',compact('user_post','foundation','category','foundation_post'));
        }
              $foundation_post=foundationPost::orderBy('id','desc')->where('f_post_category',"LIKE","%$q%")->paginate(6);
              return view('home',compact('category','foundation','foundation_post','user_post'));
    }
    
    public function getSearchFoundation(Request $request)
    {
        $q=$request['q'];
        $user_post=userPost::all();
        $foundation=Foundation::all();
        $category=Category::all();
        if($q=='0'){
             $foundation_post=foundationPost::orderBy('id','desc')->paginate(6);
             return view('home',compact('category','foundation','foundation_post','user_post'));
        }
             $foundation_post=foundationPost::orderBy('id','desc')->where('foundation_id',"LIKE","%$q%")->paginate(6);
             return view('home',compact('category','foundation','foundation_post','user_post'));
    }

    public function profile(Request $request){
        $selectfoundation=Foundation::all();
        $selectcategory=Category::all();
        $f_id=foundationPost::all();
        $p_id=userPost::all();
        $data=User::where('id',$request->id)->first();
        $foundation=Foundation::where('user_id',$request->id)->first();
        $people=People::where('user_id',$request->id)->first();
        $userpost=userPost::where('user_id',$request->id)->first();
        $foundationpost=foundationPost::where('user_id',$request->id)->first();
        $fpost=foundationPost::where('user_id',$request->id)->paginate(6);
        $ppost=userPost::where('user_id',$request->id)->paginate(6);
        return view('frontend.profile',compact('data','foundation','people','userpost','foundationpost','fpost','ppost','f_id','p_id','selectfoundation','selectcategory'));

    }

    public function account(Request $request){
        $foundation=Foundation::where('user_id',$request->id)->first();
        $people=People::where('user_id',$request->id)->first();
        return view('frontend.account',compact('foundation','people'));
    }

    public function accountUpdate(Request $request){

        $user = Auth::user();
        $user->name = $request->name;
        if($request->password && $request->old_password)
        {
            if(Hash::check($request->old_password, $user->password))
            {
                if($request->password === $request->confirm_password)
                {
                    if(strlen($request->password) > 3)
                    {
                        $user->password = bcrypt($request->password);
                    }
                    else return redirect()->back()->with('error', 'Your password is less than 4 characters!');
                }
                else return redirect()->back()->with('error', 'Your password don\'t match!');
            }
            else return redirect()->back()->with('error', 'Your old password isn\'t correct');
        }
        $user->save();
        return redirect()->back()->with('message', 'Successfully Saved Profile!');
    }

    public function detailPage(Request $request){
        $foundationPost=foundationPost::where('id',$request->id)->first();
        return view('frontend.detail',compact('foundationPost'));

    }

    public function PeoplePostDelete(Request $request){
       $post1=foundationPost::where('user_post_id',$request->id)->delete();
        $post2=userPost::where('id',$request->id)->delete();

        return redirect()->back();
    }

    public function FoundationPostDelete(Request $request){
        $post1=foundationPost::where('id',$request->id)->delete();
         return redirect()->back();
     }
}
