<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;

//Home
Route::group(['middleware'=>['auth']],function (){

    Route::get('/home', 'Frontend\HomeController@index')->name('home');
});

//Welcome
Route::get('/','Frontend\welcomeController@getWelcome')->name('/');

//foundation

Route::post('foundation/register/post','Frontend\FoundationController@postFoundationRegister')->name('foundation_register');

//people
Route::get('people/register/view','Frontend\peopleController@getPeopleRegister')->name('people_register_view');
Route::post('/people/register/post','Frontend\peopleController@postPeopleRegister')->name('people_register');

//Language Change
Route::get('locale/{locale}',function ($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});

//donor
Route::get('/donor/home/','Frontend\donorController@getDonorHome')->name('donor_home');
Route::get('donation/form/','Frontend\donorController@getDonationForm')->name('get_donation_form');
Route::post('donate/Form','Frontend\donorController@postDonateForm')->name('donate_form');
Route::get('delete/donor/request/{id}','Frontend\donorController@getDeleteDonorRequest')->name('delete_donor_request');

//search
Route::get('search/category/{q}','Frontend\homeController@getSearchCategory')->name('search_category');
Route::get('search/foundation/{q}','Frontend\homeController@getSearchFoundation')->name('search_foundation');
Route::get('donor/search/category/{q}','Frontend\donorController@getSearchCategory')->name('donor_search_category');
Route::get('donor/search/foundation/{q}','Frontend\donorController@getSearchFoundation')->name('donor_search_foundation');
Route::get('donate/form/cancel/','Frontend\donorController@getDonateCancle')->name('donate_form_cancel');

//contact
Route::get('/User/ContactUs/','Frontend\donorController@getContactUs')->name('contact_us_nav');

//terms and conditions
Route::get('/User/termsandconditions','Frontend\donorController@getTermsAndConditions')->name('terms_and_conditions');

//about us
Route::get('/User/about_us','Frontend\donorController@getAboutUs')->name('about_us');

//Mail
Route::post('/Send/Mail/','Frontend\MailController@sendEmail')->name('send_mail');


Route::group(['prefix'=>'foundation','middleware'=>'foundation'],function (){
    Auth::routes(
        [ 'register' => false,]
    );
    Route::post('/account/update/{id}','Frontend/HomeController@accountUpdate')->name('faccount_update');
    Route::get('account/{id}','Frontend\HomeController@account');
    Route::get('profile/{id}','Frontend\HomeController@profile');
    Route::get('/login/view','Frontend\FoundationController@getFoundationLogin')->name('foundation_login_view');
    Route::get('/request/view/','Frontend\FoundationController@getFoundationRequestView')->name('foundation_request_view');
    Route::post('/request/post/{id}','Frontend\FoundationController@postFoundationRequest')->name('foundation_request_post');
    Route::post('report/form/{id}','Frontend\FoundationController@postFoundationReport')->name('report_form');

});

Route::group(['prefix'=>'people','middleware'=>'people'],function (){
    Auth::routes(
        [ 'register' => false,]
    );
    Route::post('/account/update/{id}','Frontend\HomeController@accountUpdate')->name('paccount_update');
    Route::get('account/{id}','Frontend\HomeController@account');
    Route::get('profile/{id}','Frontend\HomeController@profile');
    Route::get('/login/view','Frotend\peopleControllerController@getPeopleLogin')->name('people_login_view');
    Route::post('/request/post/form/{id}','Frontend\peopleController@postPeopleRequest')->name('user_post_form');
    Route::get('/request/post/view','Frontend\peopleController@getPeoplePostView')->name('request_user_post');
  
});

//Detail

Route::get('detail_page/{id}','Frontend\donorController@detailPage');
Route::get('post_delete/people/{id}','Frontend\HomeController@PeoplePostDelete');
Route::get('post_delete/foundation/{id}','Frontend\HomeController@FoundationPostDelete');
