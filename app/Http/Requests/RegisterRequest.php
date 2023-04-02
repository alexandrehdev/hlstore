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
            "username" => [
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
            "password_confirmation" => [
                "required"
            ]
        ];
    }

    public function messages() :array
    {
        return [
            "username.required" => "O campo Nome de Usuário é obrigatório",
            "email.required" => "O Campo de Email é obrigatório",
            "email.unique" => "Email já cadastrado",
            "password" => "O campo de Senha é obrigatório",
            "password_confirmation" => "O campo de confirmação de senha é obrigatorio"
        ];
    }
}
