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

//Controllers for frontend pages
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('portfolio', 'FrontPagesController@portfolio')->name('portfolio');
Route::get('company', 'FrontPagesController@company')->name('company');
Route::get('enterprise-messaging', 'FrontPagesController@enterpriseMessaging')->name('entmsg');
Route::get('voice', 'FrontPagesController@voice')->name('voice');
Route::get('connectivity', 'FrontPagesController@connectivity')->name('connectivity');
Route::get('digital-marketing', 'FrontPagesController@digitalMarketing')->name('dmtk');
Route::get('product', 'FrontPagesController@product')->name('prod');
Route::get('contactus', 'FrontPagesController@contactUs')->name('contact');
Route::post('formrequest', 'RequestController@formRequest')->name('formrequest');
Route::post('newsletter', 'RequestController@newsletterForm')->name('newsletterForm');

//Auth Controllers
Auth::routes(['register'=>false]);
Route::post('loginpassage', 'LoginPassageController@authenticate');




Route::group(['middleware'=>['backendusers','admin']],function(){
    Route::get('backend/createuser', 'AdminController@createUser')->name('createuser');
    Route::post('backend/createuser', 'AdminController@userCreated')->name('usercreated');
    Route::get('backend/userslist', 'AdminController@usersList')->name('userslist');
});
Route::group(['middleware'=>'backendusers'],function(){
    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::get('backend/qouterequest', 'AdminController@qouteRequest')->name('qouterequest');
    Route::get('backend/contactrequest', 'AdminController@contactRequest')->name('contactrequest');
    Route::get('backend/newsletter', 'AdminController@newsletterRequest')->name('newsletter');
});
