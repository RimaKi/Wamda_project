<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "firstName"=>["required","string"],
            "lastName"=>["required","string"],
            "email"=>["required","string","email","unique:email,users"],
            "password"=>["required","string"],
            "phone"=>["required","string"],
            "address"=>["required","string"],
            "isMale"=>["required","boolean"],
        ];
    }
}
