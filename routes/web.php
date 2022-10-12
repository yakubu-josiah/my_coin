<?php

use App\Http\Controllers\AdminController;
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

Route::get('/login', [RegistrationController::class, 'login'])
    ->name('login');
Route::get('/register', [RegistrationController::class, 'signup'])
    ->name('signUp');

// Route::get('/dashboard', [AdminController::class, 'index'])
//     ->name('admin.index');
// Route::get('/Admin/dashboard', [AdminController::class, 'dashboard'])
//     ->name('dashboard');
// Route::get('/Admin/dashboard/view-auction', [AdminController::class, 'viewAuction'])
//     ->name('viewAuction');
// Route::get('/Admin/dashboard/pay-bids', [AdminController::class, 'payAuction'])
//     ->name('payBids');

Route::controller(AdminController::class)->group(function () {
    Route::get('/Admin', 'index')->name('admin.index');
    Route::get('/Admin/dashboard', 'dashboard')->name('dashboard');
    Route::get('/Admin/dashboard/view-auction', 'viewAuction')->name('viewAuction');
    Route::get('/Admin/dashboard/pay-bids', 'payAuction')->name('payBids');
    Route::get('/Admin/dashboard/receive-payments', 'receiveAuction')->name('receivePay');
});