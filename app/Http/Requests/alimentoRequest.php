<?php

namespace frust\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class alimentoRequest extends FormRequest
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
            'al_nombre'=>'required|min:5|max:50|unique:alimentos'
        ];
    }
}
