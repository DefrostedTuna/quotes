<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuoteFormRequest extends FormRequest
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

    public function messages()
    {
        return [
            'text.required'         => 'The Quote field is required.',
            'text.min'              => 'The Quote field must be at least 3 characters.',
        ];

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'text'      => 'required|min:3',
            'author'    => 'required|min:3',
            'g-recaptcha-response'  => 'required|captcha'
        ];
    }
}
