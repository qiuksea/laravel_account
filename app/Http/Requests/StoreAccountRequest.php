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
            'staff_name' => 'required|max:255',
            'staff_email' => 'required|email',
            'staff_tel' => 'required',
            'who_credit_check' => 'required_if:is_over_10k,1'
        ];
    }


    public function messages()
    {
        return [
            'staff_name.required'  => 'Please enter your name.',            
            'staff_email.required'  => 'Please enter an email address.',
            'staff_tel.required'  => 'Please enter a telephone number.',
            'who_credit_check.required_if' => 'Please enter who did the credit check for you'
        ];
    }

}
