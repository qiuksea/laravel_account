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
            'staff_tel' => 'required|numeric',
            'who_credit_check' => 'required_if:is_over_10k, 1',
            'company_type' => 'required',
            'subsidiary_info' => 'required_if:is_subsidiary, 1',
            'student_reg_no' => 'required_if:is_student, 1',
            'company_name' => 'required',
            'company_address_1' => 'required',
            'company_town' => 'required',
            'company_postcode' => 'required',
            'company_telephone' => 'required',
            'company_email' => 'required|email',           
            'company_vat_reg_no' => 'required_if:company_is_eu, 1',
            'company_eu_country_id' => 'required_if:company_is_eu, 1',
            'company_non_eu_country_id' => 'required_if:company_is_eu, 0',
            'company_eligibility' => 'required_if:is_charity_or_eligible_body, 1'
           

        ];
    }


    public function messages()
    {
        return [
            'staff_name.required'  => 'Please enter your name.',  
            'staff_name.max' => ' The name may not be greater than 255 characters.',          
            'staff_email.required'  => 'Please enter an email address.',
            'staff_tel.required'  => 'Please enter a telephone number.',
            'who_credit_check.required_if' => 'Please enter who did the credit check for you.',
            'student_reg_no.required_if' => 'Please enter students registration number.',
            'company_type.required' => 'Please select: Type of customer.',
            'subsidiary_info.required_if' => 'Please provide further information for subsidiary.',
            'company_name.required' => 'Please enter a company/person name.',
            'company_address_1.required' => 'Please enter details for: Address 1.',
            'company_town.required' => 'Please enter details for: Town/City.',
            'company_postcode.required' => 'Please enter details for: Post Code.',
            'company_telephone.required' => 'Please enter company telephone number.',
            'company_email.required' => 'Please enter a company email address.',  
            'company_eu_country_id.required_if' => 'Please select a country.',   
            'company_non_eu_country_id.required_if' => 'Please select a country.', 
            'company_vat_reg_no.required_if' => 'Please enter details for: VAT Reg Number.',
            'company_eligibility.required_if' => 'Please make a selection for a charity or eligible body.'    


        ];
    }

}
