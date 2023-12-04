<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        // return false;
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'price' => ['required', 'integer', 'min:0', 'max:100000'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => "商品名を入力してください",
            'price.required' => "価格を入力してください",
            'price.integer' => "数値を入力してください",
            'price.min' => "「0」以上で入力してください",
            'price.max' => "「100,000」以下で入力してください",
        ];
    }
}
