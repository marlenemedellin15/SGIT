<?php

namespace App\Http\Requests\Provider;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|string|max:252',
            'email'=>'required|email|string|max:200|unique:providers',
            'rfc_number'=>'required|string|max:11|min:11|unique:providers',
            'address'=>'nullable|string|max:255',
            'phone'=>'required|string|max:10|min:10|unique:providers',
        ];

    }
    public function messages()
    {
        return[
            'name.required'=>'¡Este campo es requerido!',
            'name.string'=>'¡El valor no es correcto!',
            'name.max'=>'¡Solo se permiten 255 caracteres!',

            'email.required'=>'¡Este campo es requerido!',
            'email.email'=>'¡Este no es un correo electrónico!',
            'email.string'=>'¡El valor no es correcto!',
            'email.max'=>'¡Solo se permiten 200 caracteres!',
            'email.unique'=>'¡Este usuario ya se encuentra registrado!',

            'rfc_number.required'=>'¡Este campo es requerido!',
            'rfc_number.string'=>'¡Este no es un valor correcto',
            'rfc_number.max'=>'¡Solo se permiten 200 caracteres!',
            'rfc_number.min'=>'¡Se requiere al menos 11 caracteres!',
            'rfc_number.unique'=>'¡Ya se encuentra registrado!',

            'address.max'=>'¡Solo se permiten 255 caracteres!',
            'address.string'=>'¡El valor no es correcto!',

            'phone.required'=>'¡Este campo es requerido!',
            'phone.string'=>'¡Este valor no es un correcto!',
            'phone.max'=>'¡Solo se permiten 10 caracteres!',
            'phone.min'=>'¡Se requiere al menos de 10 caracteres!',
            'phone.unique'=>'¡Este usuario ya se encuentra registrado!'
        ];
    }
}
