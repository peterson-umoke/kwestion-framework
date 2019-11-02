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

// authenticatiion routes
Route::get("login", "LoginController@showLoginForm")->name("login.form");
Route::post("login", "LoginController@login")->name("login");
Route::post("logout", "LoginController@logout")->name("logout");
Route::get("logout", "LoginController@logout")->name("logout.simple");

//password reset #1
Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// password reset #2
Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');

// confirm email
Route::get('password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'ConfirmPasswordController@confirm');

// verify email
Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'VerificationController@resend')->name('verification.resend');

Route::group(['middleware' => ['admin.authenticate:admin']],  function () {
    // default routes
    Route::get('/', 'DashboardController@index')->name("dashboard");
    Route::get('/', 'DashboardController@index')->name("home");

    // users controllers
    Route::resource("users", "UserController")
        ->except([
            'show'
        ]);
    Route::resource("admins", "AdminController")
        ->except([
            'show'
        ]);
    Route::resource("user-roles", "UserRoleController")
        ->except([
            'show'
        ]);
    Route::resource("roles", "AdminRoleController")
        ->except([
            'show'
        ]);
});
