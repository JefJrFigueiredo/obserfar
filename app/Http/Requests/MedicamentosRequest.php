<?php

namespace obserfar\Http\Requests;

use obserfar\Http\Requests\Request;

class MedicamentosRequest extends Request
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
            'nome' => 'required|max:100',
			'principio' => 'required|max:100',
			'lab' => 'required|max:100',
        ];
    }
}
