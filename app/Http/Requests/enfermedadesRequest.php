<?php

namespace frust\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class enfermedadesRequest extends FormRequest
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
            'ef_nombre'      =>'required|min:5|max:50',
            'ef_descripcion' =>'required|min:5|max:256',
            'ef_url'         =>'required|min:5|max:256',
            'ef_url_imagen'  =>'required|image'
        ];
    }
}
