<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;


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





// Route::get('/logout', [ProductController::class, 'logout'])->name('logout');
Auth::routes();
Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('backend.layout.main');
    });






    // Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    // product
    Route::resource('product', ProductController::class)->names('products');
    Route::delete('gallery-delete/{id}', [ProductController::class, 'delete_gallery'])->name('gallery.delete');
    Route::post('status-option', [ProductController::class, 'status'])->name('status.save');

    //category
    Route::resource('category', CategoryController::class)->names('categories');


    //brand
    Route::resource('brand', BrandController::class)->names('brand');


    //tag
    Route::resource('tag', TagController::class)->names('tag');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth', 'isUser'])->group(function () {
    // Route::get('auth/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('auth.home');
    Route::get('user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');
});
