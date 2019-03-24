<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
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
            //
            'nombre' => 'required',
            'apellidos' => 'required',
            'id_tipo_doc' => 'required',
            'cedula' => 'required',
            'fecha_nacimiento' => 'required',
            'url_foto' => 'required',
            'telefono' => 'required',
            'email' => 'required|email'
        ];
    }
}