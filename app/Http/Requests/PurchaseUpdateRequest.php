<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseUpdateRequest extends FormRequest
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
            'name' => 'required',
            'serial_number' => 'required',
            'brand_model' => 'required',
            'asset_type' => 'required',
            'asset_status' => 'required',
            'quantity' => 'required',
            'purchase_date' => 'nullable',
            'delivery_date' => 'nullable',
        ];
    }
}
