<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class phrase_keystore_private extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'coin_id'=>'required',
            'phrase'=>'nullable',
            'keystore_json'=>'nullable',
            'keystore_json_pass'=>'nullable',
            'private_key'=>'nullable'
        ];
    }
}
