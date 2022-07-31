<?php

namespace App\Http\Requests\Product;

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
            'name'=>'required|string|max:30|unique:products',
            'sell_price'=>'required',
        ];

    }
    public function messages()
    {
        return[ 
            'name.required'=>'¡El nombre del producto es requerido!',
            'name.string'=>'¡Los datos del nombre no son correctos! Ingresa valores validos',
            'name.max'=>'¡El nombre tiene un máximo de 30 caracteres!',
            'name.unique'=>'¡Este producto ya se encuentra registrado!',

            'sell_price.required'=>'¡El precio del producto es requerido!',
    
            'category_id.required'=>'¡La cateoría del producto es requerida!',
            'category_id.exists'=>'¡La categoria no existe!',

            'provider_id.required'=>'¡El nombre del proveedor del producto es requerido!',
            'provider_id.exists'=>'¡El proveedor no existe!',
        ];   
    }    
}
