<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'Nombre' => 'required|string|max:150',
            'Direccion' => 'nullable|string|max:200',
            'Telefono' => 'nullable|string|max:30',
            'Correo' => 'required|email|max:150|unique:User,Correo',
            'Estado' => 'required|integer|exists:Estados,EstId',
            'RolId' => 'required|integer|exists:Roles,RolId',
        ];
    }
}

