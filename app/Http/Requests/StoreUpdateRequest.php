<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */


    public function rules()
    {
        return [
            'Nombre' => 'sometimes|required|string|max:150',
            'Direccion' => 'nullable|string|max:200',
            'Telefono' => 'nullable|string|max:30',
            'Correo' => 'sometimes|required|email|max:150|unique:User,Correo,' . $this->route('user'),
            'Estado' => 'sometimes|required|integer|exists:Estados,EstId',
            'RolId' => 'sometimes|required|integer|exists:Roles,RolId',
        ];


    }
}
