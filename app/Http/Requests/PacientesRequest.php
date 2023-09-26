<?php

namespace obserfar\Http\Requests;

use obserfar\Http\Requests\Request;

class PacientesRequest extends Request
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
            'nome' => 'required|min:5|max:45',
			'genero' => 'required|max:10', 
			'gruporisco' => 'required|min:0|max:20',
			'rg' => 'required|integer|min:0', 
			'nascimento' => 'required|date', 
			'sus' => 'required|max:45', 
			'escolaridade' => 'required|max:45', 
			'peso' => 'required|numeric|min:0', 
			'altura' => 'required|numeric|min:0', 
			'alcool' => 'required|min:0|max:3', 
			'telefone' => 'required', 
			'unidade' => 'required|max:45', 
			'tabaco' => 'required|max:10',
			'atividade_fisica' => 'required|max:3',
        ];
    }
}
