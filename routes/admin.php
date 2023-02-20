<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\VerificationController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\NewPasswordController;

Route::group(['prefix' => 'admin'], function (){
    Route::controller(AdminController::class)->group(function () {
        Route::get('/login', 'create')->name('adminLog');
        Route::post('/login', 'store')->name('adminStr');
        Route::get('/sign-up', 'adminRegister')->name('adminReg');
        Route::post('/register', 'reg')->name('adminRegs');
        Route::post('/sign-out', 'adminLogout')->name('sign_out');
    });
});

Route::group(['prefix' => 'admin/verification'], function(){
    Route::controller(VerificationController::class)->group(function(){
        Route::get('/forgot-password/verify', 'forgotPassword')->name('vrfy-form');
        Route::post('/email-verify/check-credentials', 'validateEmail')->name('vrfy-email');
        Route::get('/email-sent/code-verification/{id}', 'codeVerify')->name('vrfy-emailCode');
        Route::get('/email-sent/verifying/email-code', 'verifiyingCode')->name('vrfy-code');
        Route::get('/password/change-new-password/', 'newPassword')->name('vrfy-newPass');
        
    });
});

Route::middleware('admin:admin')->group(function (){
    Route::group(['prefix' => 'admin'], function (){
        Route::controller(AdminController::class)->group(function(){
            Route::get('/dashboard', 'adminDash')->name('adminDash');
        });
    });
});