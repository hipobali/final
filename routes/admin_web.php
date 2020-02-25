<?php

Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
    Auth::routes(
        [ 'register' => false,]
    );
    Route::get('/register',function (){
        return view('admin_register');
    });
    Route::get('/logout', 'adminController@logout')->name('logout');
    Route::get('/dashboard','adminController@index')->name('dashboard');
    Route::post('/register/post','adminController@postAdminRegister')->name('admin_register');
    Route::get('/foundation/data','adminController@getFoundationData')->name('admin_foundation_data');
    Route::get('foundation_data/profile/{foundation_profile}','adminController@getFoundationProfile')->name('getFoundationProfile');
    Route::get('/foundation_data/certificate/{foundation_certificate}','adminController@getFoundationCertificate')->name('getFoundationCertificate');
    Route::get('foundation_data/delete/{id}','adminController@foundationDataDelete')->name('foundationInfoDelete');
    Route::get('people_in_need/data','adminController@getUserData')->name('admin_peopleInNeed_data');
    Route::get('user_data/{user_profile}','adminController@getUserProfile')->name('getUserProfile');
    Route::get('user_data/delete/{id}','adminController@userInfoDelete')->name('userInfoDelete');

    Route::resource('category','Admin\CategoryController');
    Route::resource('foundation_data','Admin\FoundationDataController');
    Route::resource('people_data','Admin\PeopleDataController');
    Route::resource('admin_data','Admin\AdminDataController');
    Route::resource('foundation_post','Admin\FoundationPostController');
    Route::resource('people_post','Admin\PeoplePostController');
    Route::resource('donor_data','Admin\DonateFormController');
    Route::resource('report','Admin\ReportController');
    Route::resource('user_data','Admin\UserController');

    Route::get('foundation/post/data/','adminController@getFoundationPostData')->name('admin_foundation_post_data');
    Route::get('foundation/post/delete/{id}','adminController@foundationPostDataDelete')->name('foundation_post_data_delete');
    Route::get('foundation/report/post/data','adminController@getFoundationReportData')->name('admin_foundation_report_data');
    Route::get('foundation/people/post/data','adminController@getPeoplePostData')->name('admin_foundation_people_post_data');
    Route::get('people/post/delete/{id}','adminController@getPeoplePostDataDelete')->name('user_post_data_delete');
    Route::get('people/post/{image}','adminController@getPeoplePostImage')->name('get_user_post_image');

});
