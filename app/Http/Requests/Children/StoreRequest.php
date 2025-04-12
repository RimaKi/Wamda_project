<?php

namespace App\Http\Requests\Children;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->role == 'parent';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return
 Request::method() == "POST" ? [
            'name' => ['required', 'string'],
            'birthday' => ['required', 'date'],
            'isMale' => ['required', 'boolean']
        ] :
            [
                'name' => ['string'],
                'birthday' => ['date'],
                'isMale' => ['boolean']
            ];
    }
}
