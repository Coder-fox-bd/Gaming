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


Route::get('/login','LoginController@loginView')->name('user.login');
Route::post('/login','LoginController@logUserVarify')->name('user.logUserVarify');
Route::get('/register','RegistrationController@registrationView')->name('user.registrationView');
Route::post('/register','RegistrationController@storeUser')->name('user.storeUser');

////Forgot password
//Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.email');
//Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail');
//
//Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.request');
//Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.request');

Route::group(['middleware'=>['UserSess']],function (){
    Route::get('/join/{id}','HomeController@homeView')->name('user.homeView');
    Route::get('/join/match/{id}','SubmitJoiningReqController@joinView')->name('user.joinView');
    Route::post('/join/match/{id}','SubmitJoiningReqController@saveJoinReq')->name('user.saveJoinReq');
    Route::get('/','UserHomeController@userHomeView')->name('user.userHomeView');
    Route::get('/profile','ProfileController@profileView')->name('user.profileView');
    Route::get('/result','ResultController@resultView')->name('user.resultView');
    Route::get('/user/logout','LoginController@userLogout')->name('user.logout');
});

Route::get('/p4m.admin.login','AdminLoginController@viewAdminLogin')->name('admin.login');
Route::post('/p4m.admin.login','AdminLoginController@logAdminVarify')->name('admin.logAdminVarify');

Route::group(['middleware'=>['AdminSess']],function (){
    Route::get('/p4m.admin.login/home','AdminHomeController@homeView')->name('admin.home');
    Route::post('/p4m.admin.login/home','AdminHomeController@addGame')->name('admin.addGame');
    Route::get('/p4m.admin.login/add-admin','AddAdminController@viewAddAdmin')->name('admin.viewAddAdmin');
    Route::post('/p4m.admin.login/add-admin','AddAdminController@storeAdmin')->name('admin.storeAdmin');
    Route::get('/p4m.admin.login/logout','AdminLoginController@adminLogout')->name('admin.adminLogout');
    Route::get('/p4m.admin.login/add-match','MatchController@matchView')->name('admin.matchView');
    Route::post('/p4m.admin.login/add-match','MatchController@storeMatch')->name('admin.storeMatch');
    Route::get('/p4m.admin.login/match-players','MatchPlayerSearchController@matchPlayerSearchView')->name('admin.matchPlayerSearchView');
    Route::get('/p4m.admin.login/users','UserSearchController@userSearchView')->name('admin.userSearchView');
    Route::post('/p4m.admin.login/users','UserSearchController@addBalance')->name('admin.addBalance');
});
