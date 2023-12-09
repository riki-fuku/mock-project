<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\ShopReservation;
use App\Models\ShopFavorite;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class MyPageController extends Controller
{
    public function index()
    {
        $shopReservations = ShopReservation::with('shop')->where(['user_id' => auth()->id(), 'status' => ShopReservation::RESERVATION_COMPLETE_STATUS])->orderBy('reservation_date', 'asc')->get();

        $shopFavorites = ShopFavorite::with('shop')->where(['user_id' => auth()->id()])->orderBy('created_at', 'desc')->get();

        return view('user.mypage.index', compact('shopReservations', 'shopFavorites'));
    }

    public function reservationQr()
    {
        // 店舗画面遷移用のURL
        $url = 'https://google.com';
        return view('user.mypage.qr-code', compact('url'));
    }
}
