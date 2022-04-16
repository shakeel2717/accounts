<?php

use App\Http\Controllers\user\CustomerController;
use App\Http\Controllers\user\SellerController;
use App\Http\Controllers\user\TransactionController;
use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/login', 301);
Route::redirect('/user/dashboard', '/user/dashboard/index', 301);

Route::prefix('user/dashboard')->name('user.')->middleware(['auth', 'user'])->group(function () {
    Route::get('/index', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::resource('customer', CustomerController::class);
    Route::post('transaction/gaveStore', [TransactionController::class,'gaveStore'])->name('transaction.gaveStore');
    Route::resource('transaction', TransactionController::class);

});


require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/socialite.php';
