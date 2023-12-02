<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Shop;
use App\Models\ShopReservation;
use App\Models\ShopFavorite;

class MyPageController extends Controller
{
    public function index()
    {
        $shopReservations = ShopReservation::with('shop')->where(['user_id' => auth()->id(), 'status' => ShopReservation::RESERVATION_COMPLETE_STATUS])->get();

        $shopFavorites = ShopFavorite::with('shop')->where(['user_id' => auth()->id()])->orderBy('created_at', 'desc')->get();

        return view('user.mypage.index', compact('shopReservations', 'shopFavorites'));
    }
}
