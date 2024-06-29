<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ShoppingCartController;


Route::resource('/', FrontendController::class);
// Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{Product}', [ShoppingCartController::class, 'addToCart'])->name('add-cart');
Route::get('/remove/{id}', [ShoppingCartController::class, 'removeFromCart'])->name('remove');
Route::get('/removeCartItem/{id}', [ShoppingCartController::class, 'removeCartItem'])->name('removeCartItem');
Route::get('shop', [ShoppingCartController::class, 'shop'])->name('shop');
Route::get('/shoppingCart', [ShoppingCartController::class, 'shoppingCart'])->name('shoppingCart');
Route::get('/cart/count', [ShoppingCartController::class, 'getCartNumber'])->name('cart.count');
Route::get('/product/quantity/{id}', [ShoppingCartController::class, 'productQuantity'])->name('product.quantity');
Route::get('checkout/cart', [ShoppingCartController::class, 'checkoutCart'])->name('checkout.cart');
Route::post('place/order', [ShoppingCartController::class, 'placeOrder'])->name('place.order');
Route::get('/single/detail/{id}', [ShoppingCartController::class, 'singleDetail'])->name('single.detail');
