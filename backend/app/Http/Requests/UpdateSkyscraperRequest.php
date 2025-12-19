<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSkyscraperRequest extends FormRequest
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
            "name" => ["required", "string", "between:2,50"],
            "city_id" => ["required", "integer", "exists:cities,id"],
            "height" => ["required", "numeric", "between:140,1000"],
            "stories" => ["nullable", "integer", "between:25,300"],
            "finished" => ["nullable", "integer", "between:1900,3000"],
        ];
    }
}
