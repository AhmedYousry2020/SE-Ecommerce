<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'product_id'=>'required|integer',
            'sub_total'=>'required|numeric',
            'shipment_fees'=>'required|numeric',
            'total_amount'=>'required|numeric',
            'payment_method'=>'required|string',
            'item_quantity'=>'required|numeric',
            'tax'=>'required|numeric'
        ];
    }
}
