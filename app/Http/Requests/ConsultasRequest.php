<?php

namespace obserfar\Http\Requests;

use obserfar\Http\Requests\Request;

class ConsultasRequest extends Request
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
            'paciente' => 'required|integer|exists:pacientes,id', 
			'usuario' => 'required|integer|exists:users,id', 
			//'pictograma_id' => 'required|integer', 
			//'qualidadevida_id' => 'required|integer|exists:qualidadevidas,id', 
			//'arvores_id' => 'required|integer',
			//'ram_id' => '',
			//'prm_resultado' => ''
        ];
    }
}
