<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MergewordsRequest extends FormRequest
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
            'text1' => 'required|min:3|max:100000',
            'text2' => 'required|min:3|max:100000',
            'text3' => 'required|min:3|max:100000'
        ];
    }
}
