<?php

namespace obserfar\Http\Requests;

use obserfar\Http\Requests\Request;

class BolsistasRequest extends Request
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
            'matricula' => 'required|max:45',
			'curso' => 'required|max:100',
			'instituicao' => 'required|max:100'
        ];
    }
}
