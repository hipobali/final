<?php

Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
    Auth::routes(
        [ 'register' => false,]
    );
    Route::get('/register',function (){
        return view('auth.register.admin_register');
    });
    Route::get('/logout', 'adminController@logout')->name('logout');
    Route::get('/dashboard','adminController@index')->name('dashboard');

    Route::post('/register/post','adminController@postAdminRegister')->name('admin_register');

    Route::resource('category','Admin\CategoryController');
    Route::resource('foundation_data','Admin\FoundationDataController');
    Route::resource('people_data','Admin\PeopleDataController');
    Route::resource('admin_data','Admin\AdminDataController');
    Route::resource('foundation_post','Admin\FoundationPostController');
    Route::resource('people_post','Admin\PeoplePostController');
    Route::resource('donor_data','Admin\DonateFormController');
    Route::resource('report','Admin\ReportController');
    Route::resource('user_data','Admin\UserController');

});
