<?php

namespace obserfar\Http\Requests;

use obserfar\Http\Requests\Request;

class FarmaceuticosRequest extends Request
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
			'crf' => 'required|integer|min:0'
        ];
    }
}
