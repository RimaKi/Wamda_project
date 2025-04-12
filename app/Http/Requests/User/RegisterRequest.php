<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;

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
        return Request::method() == 'POST' ?
        [
            "firstName"=>["required","string"],
            "lastName"=>["required","string"],
            "email"=>["required","string","email","unique:email,users"],
            "password"=>["required","string"],
            "phone"=>["required","string"],
            "address"=>["required","string"],
            "isMale"=>["required","boolean"],
        ]:[
                "firstName"=>["string"],
                "lastName"=>["string"],
                "email"=>["string","email","unique:email,users"],
                "phone"=>["string"],
                "address"=>["string"],
                "isMale"=>["boolean"],
            ];
    }
}
