<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostUpdateRequest extends Request
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
            'title'=>'required|max:255',
            'explanation'=>'required|max:255',
            'usage'=>'required|max:255',
            'codeexample'=>'required|max:255'
        ];
    }
}
