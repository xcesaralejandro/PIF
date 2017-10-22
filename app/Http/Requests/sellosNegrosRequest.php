<?php

namespace frust\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sellosNegrosRequest extends FormRequest
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
            'sn_nombre'      =>'required|min:5|max:50|unique:sellosNegros',
            'sn_descripcion' =>'required|min:5|max:256',
            'sn_url_imagen'  =>'required|image'
        ];
    }
}
