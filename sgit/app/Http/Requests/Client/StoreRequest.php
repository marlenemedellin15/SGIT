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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|string|max:255',
            'dni'=>'required|string|min:8|max:8|unique:clients',
            'rfc'=>'nullable|string|min:11|max:11|unique:clients',
            'address'=>'nullable|string|max:255',
            'phone'=>'nullable|string|min:10|max:10|unique:clients',
            'email'=>'nullable|string|max:255|unique:clients|email:rfc,dns',
        ];
    }
    public function messages()
    {
        return[
            
            'name.required'=>'¡Este campo es requerido!',
            'name.string'=>'¡El valor no es correcto!',
            'name.max'=>'¡Solo se permiten 255 caracteres!',

            'dni.string'=>'¡El valor no es correcto!',
            'dni.required'=>'¡Este campo es requerido!',
            'dni.unique'=>'¡El numero de DNI ya se encuentra registrado!',
            'dni.min'=>'¡Se requiere de 8 caracteres!',
            'dni.max'=>'¡Solo se permiten 8 caracteres!',

            'rfc.string'=>'¡El valor no es correcto!',
            'rfc.unique'=>'¡Este RFC ya se encuentra registrado!',
            'rfc.min'=>'¡Se requiere de 11 caracteres!',
            'rfc.max'=>'¡Solo se permiten 11 caracteres!',

            'address.string'=>'¡El valor no es correcto!',
            'address.max'=>'¡Solo se permiten 255 caracteres!',

            'phone.string'=>'¡Este valor no es un correcto!',
            'phone.required'=>'¡Este campo es requerido!',
            'phone.unique'=>'¡Este numero ya se encuentra registrado!',
            'phone.min'=>'¡Se requiere al menos de 10 caracteres!',
            'phone.max'=>'¡Solo se permiten 10 caracteres!',

            'email.string'=>'¡Este valor no es un correcto!',
            'email.unique'=>'¡Este correo electrónico ya se encuentra registrado!',
            'email.max'=>'¡Solo se permiten 255 caracteres!',
            'email.email'=>'Esto no es un correo electrónico',
        ];   
    }    
}
