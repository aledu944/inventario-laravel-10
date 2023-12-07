<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', function (){
        return redirect('/products');
    });
    
    Route::get('/categories', [CategoryController::class , 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class , 'create'])->name('categories.create');
    Route::get('/categories/{id}/edit', [CategoryController::class , 'edit'])->name('categories.edit');
    
    Route::post('/categories', [CategoryController::class, "store"])->name('categories.store');
    Route::delete('/categories/{id}', [CategoryController::class , 'destroy'])->name('categories.destroy');
    Route::put('/categories/{id}', [CategoryController::class , 'update'])->name('categories.update');
    
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class);
    
});




Route::get('/auth/login', [LoginController::class, 'index'])->name('auth.index');
Route::post('/auth/login', [LoginController::class, 'store'])->name('auth.store');
Route::post('/auth/logut', [LogoutController::class, 'store'])->name('auth.logut');