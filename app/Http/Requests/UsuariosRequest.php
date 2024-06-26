<?php

namespace obserfar\Http\Requests;

use obserfar\Http\Requests\Request;

class UsuariosRequest extends Request
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
            'name' => 'required|max:255',
			'cargo' => 'required',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ];
    }
}
