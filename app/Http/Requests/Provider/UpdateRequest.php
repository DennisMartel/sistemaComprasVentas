<?php

namespace App\Http\Requests\Provider;

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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255', 
            
            'email' => 'required|string|max:200|email|unique:providers,email,'. 
            $this->route('provider')->id. '|max:255',

            'ruc_number' => 'required|string|min:10|unique:providers,email,'. 
            $this->route('provider')->id. '|max:10',

            'address' => 'nullable|string|max:255', 
            
            'phone' => 'required|string|min:9|unique:providers,email,'. 
            $this->route('provider')->id. '|max:9',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido', 
            'name.string' => 'El valor no es correcto', 
            'name.max' => 'solo se premiten 255 caracteres', 

            'email.required' => 'El email es requerido', 
            'email.string' => 'El valor no es correcto', 
            'email.max' => 'Solo se permiten 255 caracteres', 
            'email.email' => 'No se un correo electronico', 
            'email.unique' => 'Ya existe el email', 

            'ruc_number.required' => 'El Dui es requerido', 
            'ruc_number.string' => 'El valor no es correcto', 
            'ruc_number.max' => 'Solo se permiten 10 caracteres como maximo', 
            'ruc_number.min' => 'Solo se permiten 10 caracteres como minimo', 
            'ruc_number.unique' => 'Ya existe el numero de DUI', 
            
            'address.max' => 'Solo se permiten 255 caracteres', 
            'address.string' => 'El valor no es correcto', 
            
            'phone.required' => 'El campo es requerido',
            'phone.string' => 'El valor no es correcto',
            'phone.max' => 'Maximo de caracteres 9',
            'phone.min' => 'Minimo de caracteres 9',
            'phone.unique' => 'El numero de telefono ya existe',
        ];
    }
}
