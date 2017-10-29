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
            'password'      =>'min:4|required',
            'cf_password'   =>'min:4|same:password',
            'us_email'      =>'email|unique:Users',
            'us_rut'        =>'required|cl_rut|unique:Users'
        ];
    }
}
