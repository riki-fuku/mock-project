<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ShopFavoriteRequest;
use App\Models\ShopFavorite;

class ShopFavoriteController extends Controller
{
    public function store(ShopFavoriteRequest $request)
    {
        $result = ShopFavorite::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'shop_favorite create',
            'product' => $result
        ],200);
    }

    public function destroy(request $request)
    {
        $shopFavorite = ShopFavorite::find($request);

        $result = ShopFavorite::destroy($request->id);

        return response()->json([
            'status' => true,
            'message' => 'shop_favorite delete',
            'product' => $result
        ], 200);
    }
}
