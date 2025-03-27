<?php

namespace App\Http\Requests\Giftcart;

use Illuminate\Foundation\Http\FormRequest;

class StoreGiftCartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ["required","string","unique:giftcarts,name"],
            "value" => ["required","integer"],
             "rowCount" => ["required","integer","min:10","max:100"],
        ];
    }
}
