<?php

namespace App\Http\Requests\Level;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLevelRequest extends FormRequest
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
            "level_number" => ["required","integer"],
            "cost" => ["required","integer"],
            "max_amount" => ["required","integer"],
            "id" => ["required","integer","exists:levels,id"],
        ]; 
    }
}
