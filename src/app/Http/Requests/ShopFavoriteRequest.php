<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopFavoriteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => ['required', 'unique:shop_favorites,user_id,NULL,id,shop_id,' . $this->input('shop_id')],
            'shop_id' => ['required', 'unique:shop_favorites,shop_id,NULL,id,user_id,' . $this->input('user_id')],
        ];
    }
}
