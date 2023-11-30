<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\ShopController;
use App\Http\Controllers\User\MyPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group( function() {

    // 店舗関連
    Route::get('/', [ShopController::class, 'index'])->name('shop');

    Route::group(['prefix' => 'shop'], function () {
        Route::get('/detail/{id}', [ShopController::class, 'detail'])->name('shop_detail');
        Route::post('/confirm', [ShopController::class, 'confirm'])->name('shop_confirm');
        Route::post('/store', [ShopController::class, 'store'])->name('shop_store');
    });

    // マイページ関連
    Route::group(['prefix' => 'mypage'], function () {
        Route::get('/', [MyPageController::class, 'index'])->name('mypage');
    });

});

require __DIR__.'/auth.php';
