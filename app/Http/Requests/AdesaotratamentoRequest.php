<?php

namespace obserfar\Http\Requests;

use obserfar\Http\Requests\Request;

class AdesaotratamentoRequest extends Request
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
            'r1' => 'required|min:2|max:15',
			'r2' => 'required|min:1|max:15', 
			'r3' => 'required|min:1|max:15',
			'r4' => 'required|min:1|max:30',
			'r5' => 'required|min:1|max:15',
			'r6' => 'required|min:1|max:15',
			'r7' => 'required|min:1|max:15',
			'r8' => 'required|min:1|max:15'
        ];
    }
}
