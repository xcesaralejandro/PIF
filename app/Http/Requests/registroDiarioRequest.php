<?php

namespace frust\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registroDiarioRequest extends FormRequest
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
            'cs_ingesta_agua' => 'required|numeric',
            'pa_id'           => 'required|numeric'
        ];
    }
}
