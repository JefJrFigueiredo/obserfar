<?php

namespace obserfar\Http\Requests;

use obserfar\Http\Requests\Request;

class InteracaosRequest extends Request
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
            'interacao' => 'required|max:200',
            'medicamento1' => 'required|integer|exists:medicamentos,id',
            'medicamento2' => 'required|integer|exists:medicamentos,id',
        ];
    }
}
