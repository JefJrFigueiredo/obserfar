<?php

namespace obserfar\Http\Requests;

use obserfar\Http\Requests\Request;

class AdminsRequest extends Request
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
            'classe' => 'required|max:10',
			'numero' => 'required|integer|min:0'
        ];
    }
}
