<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlayerRequest extends FormRequest
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
           "name" => ["required", "string", "max:45"],
           "number" => ["required", "integer", "min:0"],
           "position" => ["required", "string", "max:45"],
           "date_of_birth" => ["required", "date"],
           "nationality" => ["nullable", "string", "max:45"],
           "height" => ["nullable", "integer", "min:0"],
           "team.id" => ["required", "integer", "exists:teams,id"],
           "team.from" => ["nullable", "integer", "lte:team.to"],
           "team.to" => ["nullable", "integer"],
        ];
    }
}
