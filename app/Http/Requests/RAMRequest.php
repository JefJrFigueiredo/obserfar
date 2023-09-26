<?php

namespace obserfar\Http\Requests;

use obserfar\Http\Requests\Request;

class RAMRequest extends Request
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
			'medicamentosusp' => 'required|min:1|max:45',
			'sintomas' => 'required|min:1|max:500',
            'r1' => 'required|min:1|max:15',
            'r2' => 'required|min:1|max:15',
            'r3' => 'required|min:1|max:15',
            'r4' => 'required|min:1|max:15',
            'r5' => 'required|min:1|max:15',
            'r6' => 'required|min:1|max:15',
            'r7' => 'required|min:1|max:15',
            'r8' => 'required|min:1|max:15',
            'r9' => 'required|min:1|max:15',
            'r10' => 'required|min:1|max:15'
            //'resultado' => 'required|min:1|max:15'
        ];
    }
}
