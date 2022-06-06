<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartido extends FormRequest
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
            'date' => 'required',//coloco el nombre de los inputs
            'time' => 'required',
            'estado' => 'required',
            'home_team' => 'required',
            'visiting_team' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'home_team' => 'equipo visitante',
            'visiting_team' => 'equipo local'
        ];
    }
}
