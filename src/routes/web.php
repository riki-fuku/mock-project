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
        Route::post('/edit', [ShopController::class, 'edit'])->name('shop_edit');
        Route::post('/update/confirm', [ShopController::class, 'updateConfirm'])->name('shop_update_confirm');
        Route::patch('/update', [ShopController::class, 'update'])->name('shop_update');
        Route::post('/destroy/confirm', [ShopController::class, 'destroyConfirm'])->name('shop_destroy_confirm');
        Route::post('/destroy', [ShopController::class, 'destroy'])->name('shop_destroy');
    });

    // マイページ関連
    Route::group(['prefix' => 'mypage'], function () {
        Route::get('/', [MyPageController::class, 'index'])->name('mypage');
    });

});

require __DIR__.'/auth.php';
