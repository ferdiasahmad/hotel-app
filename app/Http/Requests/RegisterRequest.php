<?php

namespace App\Http\Requests;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
                'email' => 'required|email|unique:users',
                'no_telp' => 'required',
                'password' => 'required|min:8',
                'password_confirm' => 'nullable|same:password'
        ];
    }
    public function messages() {
        return [
            'password.confirmed' => 'Password belum sama !',
                'password_confirm.confirmed' => 'password belum sama !',
                'username.required' => 'username belum diisi !',
                'email.required' => 'email belum diisi !',
                'no_telp.required' => 'Nomer Telepon belum diisi !',
                'password.required' => 'Password belum diisi !',
        ];
    }
}
