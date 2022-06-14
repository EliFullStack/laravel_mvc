<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEquipo extends FormRequest
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
            'name' => 'required|max:15',
            'id_entidad' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'categoría del equipo',
            'id_entidad' => 'entidad'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo categoría del equipo no puede estar vacío.',
            'id_entidad.required' => 'Debe seleccionar una entidad.'
        ];
    }
}
