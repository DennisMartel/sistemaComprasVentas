<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'string|required|max:255',
            'dui' => 'string|required|unique:clients|max:10|min:10',
            'ruc' => 'nullable|string|required|unique:clients|max:20',
            'address' => 'nullable|string|required|max:500',
            'phone' => 'string|required|unique:clients|max:9',
            // 'email' => 'nullable|string|required|unique:clients|max:255|email:ruc,dui',
            'email' => 'nullable|string|required|unique:clients|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'El valor no es correcto.',
            'name.required' => 'El campo es requerido.',
            'name.max' => 'Solo se permiten 255 caracteres.',

            'dui.string' => 'El valor no es correcto.',
            'dui.required' => 'El campo es requerido.',
            'dui.unique' => 'El DUI ya se encuentra registrado.',
            'dui.max' => 'El DUI requiere 10 caracteres como maximo contando el (-) .',
            'dui.min' => 'El DUI requiere 10 caracteres como minimo contando el (-) .',

            'ruc.string' => 'El valor no es correcto.',
            'ruc.required' => 'El campo es requerido.',
            'ruc.unique' => 'El RUC ya se encuentra registrado.',
            'ruc.max' => 'Solo se permiten 20 caracteres.',

            'address.string' => 'El valor no es correcto.',
            'address.required' => 'El campo es requerido.',
            'address.max' => 'Solo se permiten 255 caracteres.',

            'phone.string' => 'El valor no es correcto.',
            'phone.required' => 'El campo es requerido.',
            'phone.unique' => 'El telefono ya se encuentra registrado.',
            'phone.max' => 'Solo se permiten 9 caracteres contando el (-).',

            'email.string' => 'El valor no es correcto.',
            'email.required' => 'El campo es requerido.',
            'email.unique' => 'El email ya se encuentra registrado.',
            'email.max' => 'Solo se permiten 255 caracteres.',
        ];
    }
}
