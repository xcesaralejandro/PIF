<?php

namespace frust\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class agregarNutricionistaRequest extends FormRequest
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
            'us_email' => 'requerid|email|unique:Users',
             'password' => 'min:4|requerid',
             'cf_password' => 'requerid|min:4|same:password',
             'us_rut'=>'required|cl_rut|unique:Users',
             
        ];
    }
}
