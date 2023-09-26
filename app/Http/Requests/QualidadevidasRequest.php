<?php

namespace obserfar\Http\Requests;

use obserfar\Http\Requests\Request;

class QualidadevidasRequest extends Request
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
            'r1' => 'required|numeric|min:1|max:5', 
            'r2' => 'required|numeric|min:1|max:5', 
            'r3' => 'required|numeric|min:1|max:5', 
            'r4' => 'required|numeric|min:1|max:5', 
            'r5' => 'required|numeric|min:1|max:5', 
            'r6' => 'required|numeric|min:1|max:5', 
            'r7' => 'required|numeric|min:1|max:5', 
            'r8' => 'required|numeric|min:1|max:5', 
            'r9' => 'required|numeric|min:1|max:5', 
            'r10' => 'required|numeric|min:1|max:5', 
            'r11' => 'required|numeric|min:1|max:5', 
            'r12' => 'required|numeric|min:1|max:5', 
            'r13' => 'required|numeric|min:1|max:5', 
            'r14' => 'required|numeric|min:1|max:5', 
            'r15' => 'required|numeric|min:1|max:5', 
            'r16' => 'required|numeric|min:1|max:5', 
            'r17' => 'required|numeric|min:1|max:5', 
            'r18' => 'required|numeric|min:1|max:5', 
            'r19' => 'required|numeric|min:1|max:5', 
            'r20' => 'required|numeric|min:1|max:5', 
            'r21' => 'required|numeric|min:1|max:5', 
            'r22' => 'required|numeric|min:1|max:5', 
            'r23' => 'required|numeric|min:1|max:5', 
            'r24' => 'required|numeric|min:1|max:5', 
            'r25' => 'required|numeric|min:1|max:5', 
            'r26' => 'required|numeric|min:1|max:5'
        ];
    }
}
