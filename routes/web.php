<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('admin.home.dashboard');
// });


Auth::routes(['register' => 'false','login'=>'false']);


//----------------frontend route start----------------
Route::group(['namespace'=> 'Frontend','as'=>'frontend.'],function () {
    Route::get('/','HomeController@index')->name('home');
});
//----------------frontend route end----------------



//----------------admin route start----------------

//---------------admin auth route start-------------
Route::group(['namespace' => 'Admin\Auth','prefix'=>'admin','as' => 'admin.'],function () {

    // login controller
    Route::get('/login','LoginController@create')->name('login');
    Route::post('/login/authenticate','LoginController@authenticate')->name('login.authenticate');

    Route::get('/logout','LoginController@logout')->name('logout');

    // forget password
    Route::get('/forget/password','ForgetPasswordController@forget_password')->name('forget.password');
    Route::post('/forget/password/post','ForgetPasswordController@submitForgetPassword')->name('forget.password.post');

    //reset password
    Route::get('reset/password/{token}','ResetPasswordController@index')->name('reset.password');
    Route::post('reset-password/post','ResetPasswordController@submitResetPasswordForm')->name('reset-password.submit-form');

    // verify user email
    Route::get('user/verify-email/{token}','VerifyController@verifyEmail')->name('user.verify_email');

});
//---------------admin auth route end-------------

Route::group(['namespace' => 'Admin','prefix'=>'admin','middleware' => ['auth','checkStatus','checkRole'],'as' => 'admin.'],function () {

    Route::get('/dashboard','HomeController@index')->name('dashboard');
    // --------------user controller start--------------
    Route::group(['prefix'=>'user','as' => 'user.'],function(){
        Route::get('/index','UserController@index')->name('index');
        Route::get('/create','UserController@create')->name('create');
        Route::post('/store','UserController@store')->name('store');
        Route::get('/edit/{id}','UserController@edit')->name('edit');
        Route::post('/update/{id}','UserController@update')->name('update');
    });
    // --------------user controller end--------------

    //-------------profile controller start-------
    Route::group(['prefix' => 'profile','as'=>'profile.'],function(){
        Route::get('/index','ProfileController@index')->name('index');
        Route::post('/update/{id}','ProfileController@profileUpdate')->name('update');
        Route::post('/update/password/{id}','ProfileController@update_password')->name('update_password');
    });
    //-------------profile controller end --------

});

//----------------admin route end----------------




Route::get('/home', 'HomeController@index')->name('home');
