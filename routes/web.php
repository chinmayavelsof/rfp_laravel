<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RfpController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register_vendor', [AuthController::class, 'register_vendor'])->name('vendor.register');
Route::get('/register_admin', [AuthController::class, 'register_admin'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
Route::post('/vendor/register', [VendorController::class, 'register'])->name('vendor.register.submit');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/vendors', [VendorController::class, 'index'])->name('vendors.index');
    Route::get('/vendors/edit', [VendorController::class, 'edit'])->name('vendors.edit');
    Route::get('/rfp', [RfpController::class, 'index'])->name('rfp.index');
    Route::get('/rfp/add', [RfpController::class, 'create'])->name('rfp.create');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/add', [CategoryController::class, 'create'])->name('categories.create');
});


