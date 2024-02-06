<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;

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

Route::get('/', function () {
    return view('backend.layout.main');
});


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