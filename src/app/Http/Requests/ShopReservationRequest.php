<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopReservationRequest extends FormRequest
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
            'user_id' => ['required'],
            'shop_id' => ['required'],
            'reservation_date' => ['required'],
            'reservation_time' => ['required'],
            'party_size' => ['required'],
            'status' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'ステータスは必須です',
            'status.required' => 'ステータスは必須です',
        ];
    }
}
