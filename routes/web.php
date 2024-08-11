<?php

use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
Auth::routes(['register' => false]);

//Login as homepage -> Auth = dashboard
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// only authorised users
Route::middleware(['auth'])->group(function () {
    Route::resource('companies', CompanyController::class);
    Route::resource('employees', EmployeeController::class);
});

// only authorised admin users
Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::resource('users', UserController::class);
});