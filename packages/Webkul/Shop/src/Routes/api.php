<?php

use Illuminate\Support\Facades\Route;
use Webkul\Shop\Http\Controllers\Api\Checkout\CartController;
use Webkul\Shop\Http\Controllers\ProductController;
use Webkul\Shop\Http\Controllers\Customer\Account\CompareController;
use Webkul\Shop\Http\Controllers\Customer\WishlistController;
use Webkul\Shop\Http\Controllers\CategoryController;

Route::group(['middleware' => ['locale', 'theme', 'currency'], 'prefix' => 'api'], function () {

    Route::controller(ProductController::class)->group(function () {
        Route::get('products', 'index')
            ->name('shop.products.index');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('categories/{id}/attributes', 'getAttributes')
            ->name('shop.categories.attributes');

        Route::get('categories/{id}/maximum-price', 'getProductMaximumPrice')
            ->name('shop.categories.maximum-price');
    });

    Route::controller(CartController::class)->group(function () {
        Route::post('cart', 'store')->name('shop.checkout.cart.store');

        Route::prefix('checkout/cart')->group(function () {
            Route::get('', 'index')->name('shop.checkout.cart');
        
            Route::delete('remove/{id}', 'destroy')->name('shop.checkout.cart.destroy');
        });

    });


    Route::group(['middleware' => ['customer']], function () {
        Route::post('wishlist-items/{product_id}', [WishlistController::class, 'store'])
            ->name('shop.customers.account.wishlist.store');

        Route::get('compare-items/{product_id}', [CompareController::class, 'store'])
            ->name('shop.customers.account.compare.store');

    });
});

?>