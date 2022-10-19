<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/login', [RegistrationController::class, 'login'])
//     ->name('login');
// Route::get('/registration', [RegistrationController::class, 'signup'])
//     ->name('signUp');

Route::controller(UserController::class)->group(function () {
    Route::get('/User', 'index')->name('admin.index');
    Route::get('/User/archived', 'archived')->name('archived');
    Route::get('/User/dashboard', 'dashboard')->name('dashboard');
    Route::get('/User/dashboard/view-auction', 'viewAuction')->name('viewAuction');
    Route::get('/User/dashboard/pay-bids', 'payAuction')->name('payBids');
    Route::get('/User/dashboard/receive-payments', 'receiveAuction')->name('receivePay');
    Route::get('/User/dashboard/BID-messages', 'bidAuction')->name('bidMsg');
    Route::get('/User/dashboard/sale-on-auction', 'salesAuction')->name('sales');
    Route::get('/User/dashboard/bonuses', 'bonusAuction')->name('bonus');
    Route::get('/User/dashboard/affiliates', 'affiliateAuction')->name('affiliates');
    Route::get('/User/dashboard/histories', 'historyAuction')->name('history');

    Route::get('/User/dashboard/banking-details', 'bankingAdvanced')->name('banking');
    Route::get('/User/dashboard/account-password', 'accountAdvanced')->name('account');
    Route::get('/User/dashboard/account-password/update-details', 'updateAccount')->name('accountUpdate');
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

