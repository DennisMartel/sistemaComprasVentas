<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:50|unique:categories,name,'.$this->route('category')->id,
            'description' => 'nullable|string|max:250',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'El nombre de la categoria es requerido',
            'name.string' => 'El valor no es permitido',
            'name.max' => 'El máximo de caráteres permitidos son 50',
            
            'description.string' => 'El valor no es correcto',
            'description.max' => 'El máximo de caráteres permitidos son 255',
        ];
    }
}
