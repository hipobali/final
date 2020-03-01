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

  
    Route::get('/home', 'HomeController@index')->name('home');
});

//Welcome
Route::get('/','welcomeController@getWelcome')->name('/');

//foundation

Route::post('foundation/register/post','FoundationController@postFoundationRegister')->name('foundation_register');

//people
Route::get('people/register/view','peopleController@getPeopleRegister')->name('people_register_view');
Route::post('/people/register/post','peopleController@postPeopleRegister')->name('people_register');

//Language Change
Route::get('locale/{locale}',function ($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});

//donor
Route::get('/donor/home/','donorController@getDonorHome')->name('donor_home');
Route::get('donation/form/','donorController@getDonationForm')->name('get_donation_form');
Route::post('donate/Form','donorController@postDonateForm')->name('donate_form');
Route::get('delete/donor/request/{id}','donorController@getDeleteDonorRequest')->name('delete_donor_request');

//search
Route::get('search/category/{q}','homeController@getSearchCategory')->name('search_category');
Route::get('search/foundation/{q}','homeController@getSearchFoundation')->name('search_foundation');
Route::get('donor/search/category/{q}','donorController@getSearchCategory')->name('donor_search_category');
Route::get('donor/search/foundation/{q}','donorController@getSearchFoundation')->name('donor_search_foundation');
Route::get('donate/form/cancel/','donorController@getDonateCancle')->name('donate_form_cancel');

//contact
Route::get('/User/ContactUs/','donorController@getContactUs')->name('contact_us_nav');

//terms and conditions
Route::get('/User/termsandconditions','donorController@getTermsAndConditions')->name('terms_and_conditions');

//about us
Route::get('/User/about_us','donorController@getAboutUs')->name('about_us');

//Mail
Route::post('/Send/Mail/','MailController@sendEmail')->name('send_mail');


Route::group(['prefix'=>'foundation','middleware'=>'foundation'],function (){
    Auth::routes(
        [ 'register' => false,]
    );
    Route::post('/account/update/{id}','HomeController@accountUpdate')->name('faccount_update');
    Route::get('account/{id}','HomeController@account');
    Route::get('profile/{id}','HomeController@profile');
    Route::get('/login/view','FoundationController@getFoundationLogin')->name('foundation_login_view');
    Route::get('/request/view/','FoundationController@getFoundationRequestView')->name('foundation_request_view');
    Route::post('/request/post/{id}','FoundationController@postFoundationRequest')->name('foundation_request_post');
    Route::post('report/form/{id}','FoundationController@postFoundationReport')->name('report_form');

});

Route::group(['prefix'=>'people','middleware'=>'people'],function (){
    Auth::routes(
        [ 'register' => false,]
    );
    Route::post('/account/update/{id}','HomeController@accountUpdate')->name('paccount_update');
    Route::get('account/{id}','HomeController@account');
    Route::get('profile/{id}','HomeController@profile');
    Route::get('/login/view','peopleControllerController@getPeopleLogin')->name('people_login_view');
    Route::post('/request/post/form/{id}','peopleController@postPeopleRequest')->name('user_post_form');
    Route::get('/request/post/view','peopleController@getPeoplePostView')->name('request_user_post');
  
});



