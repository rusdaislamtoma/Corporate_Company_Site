<?php
Route::get('loginform', 'LoginController@index')->name('login.form');
Route::Post('login', 'LoginController@login')->name('login');
Route::middleware('auth')->group(function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('menu','MenuController');
    Route::resource('sub_menu','SubMenuController');
    Route::resource('slider','SliderController');
    Route::resource('service','ServiceController');
    Route::resource('client','ClientController');
    Route::resource('project','ProjectController');
    Route::resource('blog','BlogController');
    Route::resource('expert','ExpertController');
    Route::resource('projectImages','ProjectImagesController');
    Route::get('company_setting','CompanySettingController@company_settings')->name('company_settings');
    Route::put('company_setting/update','CompanySettingController@update_company_settings')->name('update_company_settings');

    Route::get('contact','ContactController@contact_settings')->name('contact_settings');
    Route::put('contact/update','ContactController@update_contact_settings')->name('update_contact_settings');
    Route::post('logout',function (){
        auth()->logout();
        return redirect()->route('login.form');

    })->name('logout');
});


Route::get('/','FrontEndHomeController@index')->name('home');

//Services
Route::get('service_all/{category?}','FrontEndServiceController@allService')->name('services');
Route::get('service_details/{slugTitle}','FrontEndServiceController@details')->name('service.details');


//Projects
Route::get('project_all','FrontEndProjectController@allProject')->name('projects');
Route::get('project_details/{slugTitle}','FrontEndProjectController@details')->name('project.details');


//Blogs
Route::get('blog_all/{category?}','FrontEndBlogController@allBlog')->name('blog');
Route::get('blog_details/{slugTitle}','FrontEndBlogController@details')->name('blog.details');


//Comment
Route::post('comment/store','CommentController@store')->name('comment.store');

//Contact
Route::get('contacts','FrontEndContactController@contact_info')->name('contacts');


//Question
Route::post('question/store','QuestionController@store')->name('question.store');

//About Us
Route::get('aboutUs','AboutUsController@aboutUs')->name('about-us');
Route::get('team','AboutUsController@team')->name('team');
Route::get('faq','AboutUsController@faq')->name('faq');

//Search

Route::get('search','SearchController@search')->name('search');
//Test
Route::get('test','SearchController@search')->name('test');
