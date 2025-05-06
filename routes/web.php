<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'home')->name('app_home');
    Route::get('/about', 'about')->name('app_about');
    Route::match(['get', 'post'], '/dashboard', 'dashboard')
        ->middleware('auth')
        ->name('app_dashboard');

});



Route::controller(LoginController::class)->group(function(){
    Route::get('/logout', 'logout')->name('app_logout');
    Route::post('/exist_email', 'existEmail')->name('app_existEmail');
    Route::match(['get', 'post'], '/activation_code/{token}', 'activationCode')->name('app_activation_code');
    Route::get('/user_checker', 'userChecker')->name('app_user_checker');
    Route::get('/resend_activation_code/{token}', 'resendActivationCode')->name('app_resend_activation_code');
    Route::get('/activation_account_link/{token}', 'activationAccountlink')->name('app_activation_account_link');
    Route::match(['get', 'post'], '/activation_account_change_email/{token}', 'activationAccountChangeEmail')->name('app_activation_account_change_email');
}); 




