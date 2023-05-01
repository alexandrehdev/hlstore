<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            "price" => [
                "required"
            ],
            "category" => [
                "required"
            ],
            "file" => [
                "required",
            ],
            "description" => [
                "required"
            ],
            "user_id" => [
                "required"
            ]
        ];
    }

    public function messages() :array
    {
        return [
            "name.required" => "O nome do produto é obrigatório",
            "category.required" => "A categoria do produto é obrigatório",
            "file.required" => "Uma imagem do produto é obrigatória",
            "description.required" => "Uma descrição do produto é obrigatória"
        ];
    }
}
