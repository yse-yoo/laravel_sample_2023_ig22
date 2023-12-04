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
            //
        ];
    }
}
