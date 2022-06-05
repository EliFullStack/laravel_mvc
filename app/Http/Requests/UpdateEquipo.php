<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEquipo extends FormRequest
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
            'name' => 'categoría del equipo'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo no puede estar vacío.'
        ];
    }
}
