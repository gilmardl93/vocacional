<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;

class InscripcionRequest extends FormRequest
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
        Validator::extend('numero', function($attribute, $value, $parameters)
        {
            return preg_match('/^([0-9])+$/i', $value);
        });  

        return [
            'paterno' => 'required|max:50',
            'materno' => 'required|max:50',
            'nombres' => 'required|max:80',
            'edad' => 'required|numero',
            'dni' => 'required|numero|min:8',
            'email' => 'required|email|max:50',
            'colegio' => 'required|max:200'
        ]; 

    } 

    public function messages()
    {
        return [
            'edad.numero' => 'El campo edad debe ser númerico',
            'dni.numero' => 'El campo dni debe ser númerico'
        ];
    }
}
