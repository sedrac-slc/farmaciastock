<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UtilizadorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => "required",
            'email' => "required",
            'phone' => "required",
            'birthday' => "required",
            'image' => "nullable",
            'gender' => "required",
            'tipo' => "nullable",
            'password' => "nullable",
            'password_confirmation' => "nullable"
        ];
    }
}
