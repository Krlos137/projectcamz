<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'name' => 'required|string|max:40',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'contrasena' => 'required|string|min:6',
            'rpassword' => 'required|string|min:6'
        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'validator' => true,
            'mensaje'   => 'Errores de validación verifique los datos del formulario',
            'data'      => $validator->errors()
        ]));
    }

    public function messages()
    {
        return[
            'required' => 'El campo :attribute es obligatorio.',
            'email' => 'El :attribute debe ser un correo electrónico valido.',
            'min' => 'La :attribute debe contener al menos :min caracteres',
            'string' => 'El :attribute solo acepta letras',
        ];
    }
}
