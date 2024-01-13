<?php

use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;

 /*
 *AdminController
 */
Route::prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/login', 'adminLogin')->name('admin.login');   //index == adminLogin
    });
});
