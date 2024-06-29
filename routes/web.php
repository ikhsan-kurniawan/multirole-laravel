<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::middleware('rolecheck:superadmin')->group(function () {
        Route::get('superadmin', [SuperAdminController::class, 'index'])->name('super.index');
    });
    Route::middleware('rolecheck:admin,superadmin')->group(function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
    });
    Route::middleware('rolecheck:member,admin,superadmin')->group(function () {
        Route::get('dashboard', DashboardController::class)->name('dashboard');
        Route::get('member', [MemberController::class, 'index'])->name('member.index');
    });
});

Route::redirect('/', 'dashboard');
Route::get('logout', LogoutController::class)->name('logout');
