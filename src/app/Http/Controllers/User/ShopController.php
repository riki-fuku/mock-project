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
    /**
     * ホーム画面
     *
     * @return \Illuminate\View\View
     */
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

    /**
     * 飲食店詳細・予約画面
     *
     * @param $shopId
     * @return \Illuminate\View\View
     */
    public function detail($shopId = null)
    {
        $shop = Shop::with('shop_area', 'shop_genre')->where('id', $shopId)->first();

        return view('user.shop.detail', compact('shop'));
    }

    /**
     * 飲食店予約確認画面
     *気に
     * @return \Illuminate\View\View
     */
    public function confirm(ShopReservationRequest $request)
    {
        return view('user.shop.confirm', ['request' => $request]);
    }

    /**
     * 飲食店予約完了画面
     *
     * @return \Illuminate\View\View
     */
    public function store(ShopReservationRequest $request)
    {
        $shopReservation = $request->only(['user_id', 'shop_id', 'reservation_date', 'reservation_time', 'party_size', 'status']);
        ShopReservation::create($shopReservation);

        $message = '予約ありがとうございました';
        $backPage = route('shop');

        return view('user.thanks', ['message' => $message, 'backPage' => $backPage]);
    }

    /**
     * 飲食店予約編集画面
     *
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        if ( !$request->id ) {
            return redirect('/');
        }

        $shopReservation = ShopReservation::with('shop')->where('id', $request->id)->first();

        return view('user.shop.edit', compact('shopReservation'));
    }

    /**
     * 飲食店予約変更確認画面
     *
     * @return \Illuminate\View\View
     */
    public function updateConfirm(ShopReservationRequest $request)
    {
        return view('user.shop.update-confirm', ['request' => $request]);
    }

    /**
     * 飲食店予約完了画面
     *
     * @return \Illuminate\View\View
     */
    public function update(ShopReservationRequest $request)
    {
        $shopReservation = $request->only(['user_id', 'shop_id', 'reservation_date', 'reservation_time', 'party_size', 'status']);
        ShopReservation::find($request->id)->update($shopReservation);

        $message = '予約更新しました';
        $backPage = route('mypage');

        return view('user.thanks', ['message' => $message, 'backPage' => $backPage]);
    }

    /**
     * 飲食店予約変更確認画面
     *
     * @return \Illuminate\View\View
     */
    public function destroyConfirm(Request $request)
    {
        $shopReservation = ShopReservation::with('shop')->where(['id' => $request->id])->first();
        return view('user.shop.destroy-confirm', compact('shopReservation'));
    }

    /**
     * 飲食店予約完了画面
     *
     * @return \Illuminate\View\View
     */
    public function destroy(Request $request)
    {
        ShopReservation::find($request->id)->delete();

        $message = '予約をキャンセルしました';
        $backPage = route('mypage');

        return view('user.thanks', ['message' => $message, 'backPage' => $backPage]);
    }

}
