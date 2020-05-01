<?php

Route::group(['namespace' => 'Vendor'], function() {
    // Dashboard
    Route::get('/', 'HomeController@index')->name('vendor.home');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('vendor.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('vendor.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('vendor.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Reset Password
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('vendor.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('vendor.password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('vendor.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('vendor.password.update');

    // Confirm Password
    Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('vendor.password.confirm');
    Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

    // Verify Email
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('vendor.verification.notice');
    // Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('vendor.verification.verify');
    // Route::post('email/resend', 'Auth\VerificationController@resend')->name('vendor.verification.resend');
});
