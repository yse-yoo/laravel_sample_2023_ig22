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
            // nameカラムを、入力必須、文字列
            'name' => ['required', 'string'],
            'price' => ['required', 'integer', 'min:0', 'max:100000'],
        ];
    }
}
