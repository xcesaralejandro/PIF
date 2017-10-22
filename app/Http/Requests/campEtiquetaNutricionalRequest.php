<?php

namespace frust\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class campEtiquetaNutricionalRequest extends FormRequest
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
            'cen_nombre'      =>'required|min:5|max:50|unique:camposEtiquetasNutricionales',
            'cen_descripcion' =>'required|min:5|max:256',
        ];
    }
}
