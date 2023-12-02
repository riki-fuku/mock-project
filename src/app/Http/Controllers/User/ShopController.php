<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ShopReservationRequest;

use App\Models\Shop;
use App\Models\ShopArea;
use App\Models\ShopGenre;
use App\Models\ShopReservation;
use App\Models\ShopFavorite;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with([
                'shop_area',
                'shop_genre',
                'shop_favorite' => function ($query) {
                    $query->where('user_id', auth()->id());
                }
            ])
            ->get();
        $areas = ShopArea::all();
        $genres = ShopGenre::all();

        return view('user.shop.index', ['shops' => $shops, 'areas' => $areas, 'genres' => $genres]);
    }

    public function detail($shopId = null)
    {
        $shop = Shop::with('shop_area', 'shop_genre')->where('id', $shopId)->first();

        return view('user.shop.detail', compact('shop'));
    }

    public function confirm(ShopReservationRequest $request)
    {
        return view('user.shop.confirm', ['request' => $request]);
    }

    public function store(ShopReservationRequest $request)
    {
        $shopReservation = $request->only(['user_id', 'shop_id', 'reservation_date', 'reservation_time', 'party_size', 'status']);
        ShopReservation::create($shopReservation);

        $message = '予約ありがとうございました';
        $backPage = route('shop');

        return view('user.thanks', ['message' => $message, 'backPage' => $backPage]);
    }

}
