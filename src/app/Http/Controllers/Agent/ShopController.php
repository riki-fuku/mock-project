<?php

namespace App\Http\Controllers\Agent;

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
    /**
     * ホーム画面(店舗情報)
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $shop = Shop::with('shop_area', 'shop_genre')->where('id', 1)->first();

        return view('agent.shop.index', compact('shop'));
    }
}
