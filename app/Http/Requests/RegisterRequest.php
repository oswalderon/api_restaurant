<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;

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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique: users, email'],
            'password' => [
                'required',
                'confirmed',
                PasswordRules::min(8)->letters()->symbols()->numbers()
            ]
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.unique' => 'Email is already registered',
            'password' => 'Your password must be at least 8 characters long, contain at least one number and one symbol.',
            'password.required' => 'Password is required',
            'password.confirmed' => 'Password does not match. '
        ];
    }
}
