<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'nombre'            =>  'required',
            'apellido'          =>  'required',
            'email'             =>  'email|required',
            'avatar'            =>  'image',
            'curp'              =>  'min:18|max:18|required',
            'rfc'               =>  'min:10|max:13|required',
            'homoclave'         =>  'min:3|max:3|required',

            'calle'             =>  'required',
            'colonia'           =>  'required',
            'cp'                =>  'required',
            'entidad'           =>  'required',
            'municipio'         =>  'required',
            'telefono'          =>  'required|min:11|numeric',

            'titulo'            =>  'required',
            'institucion'            =>  'required',
            'cedula'               =>  'required'
        ];
    }
}
