<?php

namespace App\Http\Requests\Farm;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFarmRequest extends FormRequest
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
            "name" => ["required","string"],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,bmp,svg|max:2048',
            "product_name" => ["required","string"],
            "min_reward" => ["required","integer",'lt:max_reward'],
            "max_reward"  => ["required","integer","gt:min_reward"],
            "slug" => ["required","string"]
            ,"product_reward" => ["required","integer"],
            "reffral_require" => ["required","integer"],
            "token_require" =>["required","integer"],
            "id" => ["required","integer"]
            ];
    }
}
