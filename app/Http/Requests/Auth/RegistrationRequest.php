<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'first_name' => 'required|max:50',
            'last_name'=> 'required|max:50',
            'email' => 'required|unique:users,email',
            'phone' => 'sometimes|unique:users,phone|digits_between:10,20',
            'password' => 'required|min:6',
            'gender' => 'sometimes|max:20'
        ];
    }
}
