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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "name" => [
                "required"
            ],
            "email" => [
                "required",
                "unique:users,email"
            ],
            "password" => [
                "required",
                "confirmed"
            ],
        ];
    }

    public function messages() :array
    {
        return [
            "name.required" => "Nome de usuário obrigatório",
            "email.required" => "Email é obrigatório",
            "email.unique" => "Email já cadastrado",
            "password" => "A Senha é obrigatório",
            "password.confirmed" => "As senhas  não conferem."
        ];
    }
}
