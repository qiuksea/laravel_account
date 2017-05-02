<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; #return false;
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
            'tel' => 'required',
            'email' => 'required|email',
            'who_credit_check' => 'required_if:is_over_10k,1'

        ];
    }


    public function messages()
    {
        return [
            'name.required'  => 'Please enter your name.',            
            'email.required'  => 'Please enter an email address.',
            'tel.required'  => 'Please enter a telephone number.',
            'who_credit_check.required_if' => 'Please enter who did the credit check for you'
        ];
    }

}
