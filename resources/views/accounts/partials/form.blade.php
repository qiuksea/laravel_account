 {{csrf_field() }}
 
  <fieldset class="form-group">
    <legend>Your Details</legend>

      <div class="form-group">
        <label for="staff_name" >name *</label>
        <input type="text" class="form-control" id="staff_name" name="staff_name" aria-describedby="staff name" value="{{ old('staff_name', isset($account->staff_name) ? $account->staff_name : null) }}">
      </div>

      <div class="form-group">
        <label for="staff_email">Email *</label>
        <input type="email" class="form-control" id="staff_email" name="staff_email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('staff_email', isset($account->staff_email) ? $account->staff_email : null) }}">
      </div>

      <div class="form-group">
        <label for="staff_tel">Tel *</label>
        <input type="text" class="form-control" id="staff_tel" name="staff_tel" value="{{ old('staff_tel', isset($account->staff_tel) ? $account->staff_tel : null) }}">
      </div>

      <div class="form-group">
       <p><strong>Is the value of this project/contract over £10,000.00?*</strong></p>
       
       <p>If yes please contact the Income Office at: incomeofficehelp@sheffield.ac.uk to obtain a credit check of the company, as stated in section 9.8 of the University's Financial Regulations, before proceeding any further.
       </p>        
      </div>

      <div class="form-check form-check-inline">      
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="is_over_10k" id="is_over_10k_yes" value="1"      
           {{ Helper::display_radio_checked(old('is_over_10k'), 
           '$account->is_over_10k', '1') }}
            >Yes         
        </label>
      </div>

      <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="is_over_10k" id="is_over_10k_no" value="0"
          @if (!old('is_over_10k') || (isset($account->is_over_10k) && !$account->is_over_10k) )
             checked
          @else
           {{ Helper::display_radio_checked(old('is_over_10k'), '$account->is_over_10k', '0') }} 
          @endif
           >No
        </label>
      </div>

      <div class="form-group hidden" style="display:none" id="project_credit_check">
        <p>If yes, have you obtained a credit check from the income office?</p>     

        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" name="company_project_check_agree" type="checkbox" checked> Yes, I have obtained a credit check 
          </label>
        </div>
        
        <div class="form-group">
          <label for="credit_check">Who did the credit check for you? *</label>
          <input type="text" class="form-control" id="who_credit_check" name="who_credit_check" value="{{ old('who_credit_check', isset($account->who_credit_check) ? $account->who_credit_check : null) }}">
        </div>
      
      </div>
  </fieldset>
 

  <fieldset class="form-group">
    <legend>Company Details</legend>

    <div class="form-group">
      <label for="company_type">Type of Customer: *</label>
      <select class="form-control" id="company_type" name="company_type">
        <option value="">Please make a selection</option>
        <option value="Company"
        {{ 
           Helper::display_dropdown_selected('Company', old('company_type'), '$account->company_type') 
                }} >Company</option>
        <option value="Person"
        {{ 
           Helper::display_dropdown_selected('Person', old('company_type'), '$account->company_type') 
                }} >Person</option>
      </select>
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="hidden" class="form-check-input" name="is_student" id="is_student_0" value="0
          {!! Helper::display_checkbox_checked(old('is_over_10k'), '$account->is_student', '0') !!}   ">
        <input type="checkbox" class="form-check-input" name="is_student" id="is_student_1" value="1" 
          {{ Helper::display_checkbox_checked(old('is_over_10k'), 
          '$account->is_student', '1') }}        
        > Is this a Student?
      </label>
    </div>     

    <div class="form-group" style="display:none" id="student_reg_no_input">
        <label for="student_reg_no">Students Registration Number:*</label>
          <input type="text" class="form-control" id="student_reg_no" name="student_reg_no" value="{{ old('student_reg_no', isset($account->student_reg_no) ? $account->student_reg_no : null) }}">
    </div>

     <div class="form-check">
      <label class="form-check-label">
        <input type="hidden" class="form-check-input" name="is_subsidiary" id="is_subsidiary_0" value="0">
        <input type="checkbox" class="form-check-input" name="is_subsidiary" id="is_subsidiary_1" value="1" 
            {{ Helper::display_checkbox_checked(old('is_subsidiary'), 
          '$account->is_subsidiary', '1') }}     
        > Is this customer a University Company or subsidiary?
      </label>
    </div>

    <div class="form-group" style="display:none" id="subsidiary_info_input">
        <label for="subsidiary_info">Please provide further information or call Ext. 24473*</label>
          <input type="text" class="form-control" id="subsidiary_info" name="subsidiary_info" value="{{ old('subsidiary_info', isset($account->subsidiary_info) ? $account->subsidiary_info : null) }}">
    </div>     

    <div class="form-group">
      <label for="company_name">Name of the Company/Person who will pay the invoice: *</label>
      <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name', isset($account->company_name) ? $account->company_name : null) }}">
    </div>

    <div class="form-group">
        <label for="company_address_1">Address 1: *</label>
        <input type="text" class="form-control" id="company_address_1" name="company_address_1" value="{{ old('company_address_1', isset($account->company_address_1) ? $account->company_address_1 : null) }}">
    </div>

    <div class="form-group">
        <label for="company_address_2">Address 2: </label>
        <input type="text" class="form-control" id="company_address_2" name="company_address_2" value="{{ old('company_address_2', isset($account->company_address_2) ? $account->company_address_2 : null) }}">
    </div>

    <div class="form-group">
        <label for="company_address_3">Address 3: </label>
        <input type="text" class="form-control" id="company_address_3" name="company_address_3" value="{{ old('company_address_3', isset($account->company_address_3) ? $account->company_address_3 : null) }}">
    </div>

    <div class="form-group">
        <label for="company_town">Town/City: *</label>
        <input type="text" class="form-control" id="company_town" name="company_town" value="{{ old('company_town', isset($account->company_town) ? $account->company_town : null) }}">
    </div>

    <div class="form-group">
        <label for="company_postcode">Post Code: *</label>
        <input type="text" class="form-control" id="company_postcode" name="company_postcode" value="{{ old('company_postcode', isset($account->company_postcode) ? $account->company_postcode : null) }}">
    </div>

    <div class="form-group">
        <label for="company_reg_number">Registration Number: </label>
        <input type="text" class="form-control" id="company_reg_number" name="company_reg_number" value="{{ old('company_reg_number', isset($account->company_reg_number) ? $account->company_reg_number : null) }}">
    </div>

    <div class="form-group">
        <label for="company_telephone">Telephone Number: *</label>
        <input type="text" class="form-control" id="company_telephone" name="company_telephone" value="{{ old('company_telephone', isset($account->company_telephone) ? $account->company_telephone : null) }}">
    </div>

    <div class="form-group">
        <label for="company_fax">Fax Number: </label>
        <input type="text" class="form-control" id="company_fax" name="company_fax" value="{{ old('company_fax', isset($account->company_fax) ? $account->company_fax : null) }}">
    </div>

    <div class="form-group">
        <label for="company_email">Email Address (Accounts Payable/Finance email address for companies/organisations): *</label>
        <input type="email" class="form-control" id="company_email" name="company_email" value="{{ old('company_email', isset($account->company_email) ? $account->company_email : null) }}">
    </div>

    <div class="form-group">
        <label for="company_contact_name">Contact Name: </label>
        <input type="text" class="form-control" id="company_contact_name" name="company_contact_name" value="{{ old('company_contact_name', isset($account->company_contact_name) ? $account->company_contact_name : null) }}">
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="hidden" class="form-check-input" name="compnay_is_eu" id="company_is_eu_0" value="0" selected="selected">
        <input type="checkbox" class="form-check-input" name="company_is_eu" id="company_is_eu_1" value="1"  
          {{ Helper::display_checkbox_checked(old('company_is_eu'), 
          '$account->company_is_eu', '1') }}     
        > Is the customer part of the EU?
      </label>
    </div>     


    <!-- country -->
        <div class="form-group" style="display:none" id="eu_country_selection">

          <label for="eu_company_country_id">Please select your EU country:</label>
          <select class="form-control" id="eu_company_country_id" name="company_country_id">
              <option value="0">Please make a selection</option>
            
              @foreach($eu_countries as $eu_country)
                <option value="{{ $eu_country->id }}"  
                 {{ 
                  Helper::display_dropdown_selected($eu_country->id, old('company_country_id'), '$account->company_country_id') 
                }}
                 > 
                {{ $eu_country->name}} 
                </option>
              @endforeach            
          </select>

          <div class="form-group">
                <label for="company_vat_reg_no">Please provide VAT number (Exc. UK):</label>
                <input type="text" class="form-control" id="company_vat_reg_no" name="company_vat_reg_no" value="{{ old('company_vat_reg_no', isset($account->company_vat_reg_no) ? $account->company_vat_reg_no : null) }}">
          </div>

        </div>

        <div class="form-group" style="display:visible" id="non_eu_country_selection">
          <label for="non_eu_company_country_id">Please select your country (Non EU):</label>
          <select class="form-control" id="non_eu_company_country_id" name="company_country_id">
              <option value="0">Please make a selection</option>
          
              @foreach($non_eu_countries as $non_eu_country)
                <option value="{{ $non_eu_country->id }}"
                {{ 
                  Helper::display_dropdown_selected($non_eu_country->id, old('company_country_id'), '$account->company_country_id') 
                }}           
                >
                {{ $non_eu_country->name}}
                </option>
              @endforeach
            
          </select>
        </div>

    <!-- vat number -->

    <div class="form-check">
      <label class="form-check-label">
        <input type="hidden" class="form-check-input" name="is_charity_or_eligible_body" id="is_charity_or_eligible_body_0" value="0">
        <input type="checkbox" class="form-check-input" name="is_charity_or_eligible_body" id="is_charity_or_eligible_body_1" value="1"    
            {{ Helper::display_checkbox_checked(old('is_charity_or_eligible_body'), 
          '$account->is_charity_or_eligible_body', '1') }}     
        > Is the customer a charity or eligible body?
      </label>
    </div>    

<!-- eligible body select list-->

  <div class="form-group" style="display:none" id="charity_eligible_body_selection">
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="company_eligibility" id="company_eligibility_1" value="UK University"   
         {!! Helper::display_radio_checked(old('company_eligibility'), '$account->company_eligibility', 'UK University') !!} 
       >
        UK University
      </label>
    </div>

    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="company_eligibility" id="company_eligibility_2" value="UK School/College"
        {!! Helper::display_radio_checked(old('company_eligibility'), '$account->company_eligibility', 'UK School/College') !!}
        >
        UK School/College
      </label>
    </div>

    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="company_eligibility" id="company_eligibility_3" value="UK Government Dept"
            {!! Helper::display_radio_checked(old('company_eligibility'), '$account->company_eligibility', 'UK Government Dept') !!}
      >
        UK Government Dept
      </label>
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="company_eligibility" id="company_eligibility_4" value="UK Charity"
         {!! Helper::display_radio_checked(old('company_eligibility'), '$account->company_eligibility', 'UK Charity') !!}
        >
        UK Charity
      </label>
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="company_eligibility" id="company_eligibility_5" value="UK Research Council"
           {!! Helper::display_radio_checked(old('company_eligibility'), '$account->company_eligibility', 'UK Research Council') !!}
           >
        UK Research Council
      </label>
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="company_eligibility" id="company_eligibility_6" value="UK Hospital"
        {!! Helper::display_radio_checked(old('company_eligibility'), '$account->company_eligibility', 'UK Hospital') !!}
        >
        UK Hospital
      </label>
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="company_eligibility" id="company_eligibility_7" value="Other"
         {!! Helper::display_radio_checked(old('company_eligibility'), '$account->company_eligibility', 'Other') !!}
        >
        Other:
      </label>
    </div>

    <div class="form-group">
          <label for="company_eligibility_other">Explain others</label>
          <input type="text" class="form-control" id="company_eligibility_other" name="company_eligibility_other" value="{{ old('company_eligibility_other', isset($account->company_eligibility_other) ? $account->company_eligibility_other : null) }}">
    </div>
  </div>


    <div class="form-group">
      <label for="company_notes">Any other relevant information:</label>
      <textarea class="form-control" id="company_notes" name="company_notes" rows="5">{{ old('company_notes', isset($account->company_notes) ? $account->company_notes : null) }}</textarea>
    </div>

  </fieldset>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>


