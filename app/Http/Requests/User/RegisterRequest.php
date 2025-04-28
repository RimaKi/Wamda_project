<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rules\Password;

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
                "firstName" => ["required", "string"],
                "lastName" => ["required", "string"],
                "email" => ["required","email", "unique:users,email"],
                "password" => ["required", 'confirmed', Password::min(8)
                    ->letters()
                    ->numbers()
                    ->symbols()],
                "phone" => ["required", 'regex:/^[0-9]{10}$/'],
                "address" => ["required", "string"],
                "isMale" => ["required", "boolean"],
            ] : [
                "firstName" => ["string"],
                "lastName" => ["string"],
                "email" => ["email", "unique:users,email"],
                "phone" => ['regex:/^[0-9]{10}$/'],
                "address" => ["string"],
                "isMale" => ["boolean"],
            ];
    }
}
