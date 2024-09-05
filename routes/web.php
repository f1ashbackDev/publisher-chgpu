<?php

use App\Http\Controllers\Admin\DepartController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\WebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebController::class, 'indexPage'])->name('home');
Route::get('/login',[UserController::class, 'loginPage'])->name('user.loginPage');
Route::post('/login',[UserController::class, 'login'])->name('user.login');
Route::get('/register',[UserController::class, 'registerPage'])->name('user.registerPage');
Route::post('/register', [UserController::class, 'register'])->name('user.register');
Route::get('/logout',[UserController::class, 'logout'])->name('user.logout');

Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\WebController::class, 'index'])->name('admin.indexPage');
    // Departs
    Route::prefix('departs')->group(function () {
        Route::get('/', [DepartController::class, 'index'])->name('admin.departs');
        Route::post('/create', [DepartController::class, 'store'])->name('admin.departs.store');
        Route::get('/{depart}/edit', [DepartController::class, 'edit'])->name('admin.departs.edit');
        Route::post('/{depart}/edit', [DepartController::class, 'update'])->name('admin.departs.update');
        Route::get('/{depart}/destroy', [DepartController::class, 'destroy'])->name('admin.departs.destroy');
    });
    // Categories
    Route::prefix('categories')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.categories');
        Route::post('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/{categories}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::post('/{categories}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.categories.update');
        Route::get('/{categories}/destroy', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    });
    // Products
    Route::prefix('products')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products');
        Route::get('/create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.products.create');
        Route::post('/create', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.products.store');
        Route::get('/{product}/edit', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin.products.edit');
        Route::post('/{product}/edit', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin.products.update');
        Route::get('/{product}/destroy', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin.products.destroy');
    });
    // Users
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.users');
        Route::get('/create', [UserController::class, 'create'])->name('admin.users.create');
        Route::post('/create', [UserController::class, 'store'])->name('admin.users.store');
        Route::get('/{users}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
        Route::post('/{users}/edit', [UserController::class, 'update'])->name('admin.users.update');
        Route::get('/{users}/destroy', [UserController::class, 'destroy'])->name('admin.users.destroy');
    });
//    Service
    Route::prefix('service')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('admin.services');
        Route::get('/create', [\App\Http\Controllers\Admin\ServiceController::class, 'create'])->name('admin.services.create');
        Route::post('/create', [\App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('admin.services.store');
        Route::get('/{services}/edit', [\App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('admin.services.edit');
        Route::post('/{services}/edit', [\App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('admin.services.update');
        Route::get('/{services}/destroy', [\App\Http\Controllers\Admin\ServiceController::class, 'destroy'])->name('admin.services.destroy');
    });
});
