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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|string|unique:products,name,'.
            $this->route('product')->id.'|max:255',
            'image'=>'nullable|dimensions:min_width=100,min_height=200',
            'sell_price'=>'required',
            'category_id'=>'required|integer|exists:App\Models\Category,id',
            'provider_id'=>'required|integer|exists:App\Models\Provider,id',
        ];

    }
    public function messages()
    {
        return[
            
            'name.required'=>'¡Este campo es requerido!',
            'name.string'=>'¡El valor no es correcto!',
            'name.max'=>'¡Solo se permiten 255 caracteres!',
            'name.unique'=>'¡Este producto ya se encuentra registrado!',
    
            // 'image.required'=>'¡Este campo es requerido!',
            'image.dimensions'=>'Solo se permiten imagenes de 100x200 px.',

            'sell_price.required'=>'¡El campo es requerido!',
    
            'category_id.required'=>'¡Este campo es requerido!',
            'category_id.interger'=>'¡El valor tiene que ser entero!',
            'category_id.exists'=>'¡La categoria no existe!',

            'provider_id.required'=>'¡Este campo es requerido!',
            'provider_id.interger'=>'¡El valor tiene que ser entero!',
            'provider_id.exists'=>'¡El proveedor no existe!',
        ];   
    }    
}
