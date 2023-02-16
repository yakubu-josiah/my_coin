<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\VerificationController;
use Illuminate\Support\Facades\Route;


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
        Route::get('/email-verify', 'forgotPassword')->name('vrfy-admin');
    });
});

Route::middleware('admin:admin')->group(function (){
    Route::group(['prefix' => 'admin'], function (){
        Route::controller(AdminController::class)->group(function(){
            Route::get('/dashboard', 'adminDash')->name('adminDash');
        });
    });
});