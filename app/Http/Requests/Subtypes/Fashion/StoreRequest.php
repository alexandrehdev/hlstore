<?php

namespace App\Http\Requests\Subtypes\Fashion;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            "name" => ['required'],
            "description" => ['required'],
            "type" => ['required'],
            "subtype" => ['required'],
            "brand" => ['required'],
            "color" => ['required'],
            "condition" => ['required'],
            "gender" => ['required'],
            "price" => ["required"],
            "size" => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => "O Nome do produto é OBRIGATÓRIO",
            'description.required' => "A DESCRIÇÃO do produto é OBRIGATÓRIO",
            'subtype.required' => "O campo SUBTIPO DE ROUPA é OBRIGATÓRIO",
            'brand.required' => "O campo MARCA é OBRIGATÓRIO",
            'color.required' => "O campo COR é OBRIGATÓRIO",
            'condition.required' => "O campo de NOVO/USADO é OBRIGATÓRIO",
            'gender.required' => "O campo GÊNERO é OBRIGATÓRIO",
            'price.required' => "O campo de PREÇO é OBRIGATÍO",
            'size.required' => "O campo de TAMANHO é OBRIGATORIO"
        ];
    }
}
