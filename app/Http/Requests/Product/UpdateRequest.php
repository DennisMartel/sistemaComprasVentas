<?php

namespace App\Http\Requests\Product;

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
            'name' => 'string|required|unique:products,name,'.$this->route('products')->id.'|max:255',
            'imagen' => 'required|dimensions:min_width=100,min_height=200', 
            'sell_price' => 'required', 
            'category_id' => 'integer|required|exists:App\Category,id', 
            'provider_id' => 'integer|required|exists:App\Provider,id', 
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'El valor no es permitido.',
            'name.required' => 'El campo es requerido.',
            'name.unique' => 'El nombre ya esta registrado.',
            'name.max' => 'Solo se permiten 255 caracteres.',

            'image.required' => 'El campo es requerido.',
            'image.dimensions' => 'Solo se permiten imagenes de 100X200 px.',

            'sell_price' => 'El campo es requerido.',

            'category_id.integer' => 'El valor tiene que ser un numero entero', 
            'category_id.required' => 'El campo es requerido',
            'category_id.exists' => 'La categoria no exites',

            'provider_id.integer' => 'El valor tiene que ser un numero entero', 
            'provider_id.required' => 'El campo es requerido',
            'provider_id.exists' => 'El proveedor no exites',
        ];
    }
}
