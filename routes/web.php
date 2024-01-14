<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\HomeController;
use Illuminate\Support\Facades\Route;

 /*
 *AdminController
 */
Route::prefix('admin')->group(function () {
    //Admin guest middleware

    Route::group(['middleware' => 'admin.guest'], function () {
         Route::controller(AdminController::class)->group(function () {
             Route::get('/login', 'adminLogin')->name('admin.login'); //index == adminLogin
             Route::post('/authenticate', 'authenticate')->name('admin.authenticate');
         });
    });
   

    //Admin auth middleware

    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [HomeController::class, 'logout'])->name('admin.logout');
    });

});
