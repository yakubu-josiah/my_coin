<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\VerificationController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\NewPasswordController;

Route::group(['prefix' => 'admin'], function (){
    Route::controller(AuthController::class)->group(function () {
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
        Route::post('/email-sent/verifying/email-code/{id}', 'verifiyingCode')->name('vrfy-code');
        Route::get('/password/change-new-password/{id}', 'newPassword')->name('vrfy-newPass');
        Route::put('/password/change/update/{id}/submit', 'updatePassword')->name('vrfy-updatePass');

    });
});

Route::middleware('admin:admin')->group(function (){
    Route::group(['prefix' => 'admin'], function (){
        Route::controller(AuthController::class)->group(function(){
            Route::get('/dashboard', 'adminDash')->name('adminDash');
        });
    });
});