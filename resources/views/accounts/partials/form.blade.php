 {{csrf_field() }}
 
  <fieldset class="form-group">
    <legend class="alert alert-info" role="alert">Your Details</legend>

      <div class="form-group row">
        <label class="col-5 form-control-label" for="staff_name" > <strong>Name * </strong></label>
        <div class="col-7">
          <input type="text" class="form-control {{ $errors->has('staff_name') ? 'is-invalid' : '' }}" id="staff_name" name="staff_name" aria-describedby="staff name" 
          @if (session()->has('user_info.firstname'))
            value = "{{session('user_info.firstname')}} {{session('user_info.lastname')}}"        
          @else
            value="{{ old('staff_name', isset($account->staff_name) ? $account->staff_name : null) }}"
          @endif>

          <div class="invalid-feedback">
            {{  $errors->first('staff_name')   }}
          </div>

        </div>
      </div>

      <div class="form-group row">
        <label class="col-5 form-control-label" for="staff_email"><strong> Email * </strong></label>
        <div class="col-7">
          <input type="email" class="form-control  {{ $errors->has('staff_email') ? 'is-invalid' : '' }}" id="staff_email" name="staff_email" aria-describedby="emailHelp" placeholder="Enter email"
          @if (session()->has('user_info.email'))
            value = "{{session('user_info.email')}}"         
          @else
            value="{{ old('staff_email', isset($account->staff_email) ? $account->staff_email : null) }}"
          @endif >

          <div class="invalid-feedback">
            {{  $errors->first('staff_email')   }}
          </div>

        </div>
      </div>

      <div class="form-group row">
        <label class="col-5 form-control-label" for="staff_tel"><strong> Telephone * </strong></label>
        <div class="col-7">
          <input type="text" class="form-control  {{ $errors->has('staff_tel') ? 'is-invalid' : '' }}" id="staff_tel" name="staff_tel" value="{{ old('staff_tel', isset($account->staff_tel) ? $account->staff_tel : null) }}">
          
          <div class="invalid-feedback">
            {{  $errors->first('staff_tel')   }}
          </div>

        </div>
      </div>

      <div class="form-group">
         <p><strong>Is the value of this project/contract over £10,000.00?*</strong></p>
         
         <p>If <strong>yes</strong>, please contact the Income Office at: incomeofficehelp@sheffield.ac.uk to obtain a credit check of the company, as stated in section 9.8 of the University's Financial Regulations, before proceeding any further.
         </p>        
      

        <div class="form-check form-check-inline">      
         
          <input type="radio" class="form-check-input" name="is_over_10k" id="is_over_10k_yes" value=1 
          {{ Helper::display_radio_checked(old('is_over_10k'), isset($account->is_over_10k) ?  $account->is_over_10k : null, 1)  }}>
           
          <label class="form-check-label"> Yes </label>
          
        </div>

        <div class="form-check form-check-inline">
          
          <input type="radio" class="form-check-input" name="is_over_10k" id="is_over_10k_no" value=0 
          {{ Helper::display_radio_checked(old('is_over_10k'), isset($account->is_over_10k) ?  $account->is_over_10k : 0, 0)  }}>  
            
          <label class="form-check-label"> No </label>
        </div>

       </div>

      <div class="form-group hidden" style="display:none" id="project_credit_check">
        <p>If <strong>yes</strong>, have you obtained a credit check from the income office?</p>     

        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" name="company_project_check_agree" type="checkbox" checked> Yes, I have obtained a credit check 
          </label>
        </div>
        
        <div class="form-group row">
          <label  class="col-5 form-control-label" for="credit_check"><strong>Who did the credit check for you? *</strong></label>
          <div class="col-7">
            <input type="text" class="form-control  {{ $errors->has('who_credit_check') ? 'is-invalid' : '' }}" id="who_credit_check" name="who_credit_check" value="{{ old('who_credit_check', isset($account->who_credit_check) ? $account->who_credit_check : null) }}">

             <div class="invalid-feedback">
                 {{  $errors->first('who_credit_check')   }}
             </div>
          </div>
        </div>
      
      </div>
  </fieldset>
 

  <fieldset class="form-group">
    <legend class="alert alert-info" role="alert">Company Details</legend>

    <div class="form-group row">
      <label class=" col-5 form-control-label" for="company_type"><strong> Type of Customer * </strong></label>
      <div class="col-7">
        <select class="form-control  {{ $errors->has('company_type') ? 'is-invalid' : '' }}" id="company_type" name="company_type">
          <option value=" ">Please make a selection</option>
          <option value="Company"
          {{ 
             Helper::display_dropdown_selected(old('company_type'), isset($account->company_type) ?  $account->company_type : null, 'Company')
                  }} >Company</option>
          <option value="Person"
          {{ 
             Helper::display_dropdown_selected(old('company_type'), isset($account->company_type) ?  $account->company_type : null, 'Person')
                  }} >Person</option>
        </select>

        <div class="invalid-feedback">
            {{  $errors->first('company_type')   }}
        </div>

      </div>
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="hidden" class="form-check-input" name="is_student" id="is_student_0" value=0
          {{ Helper::display_checkbox_checked(old('is_student'), isset($account->is_student) ? $account->is_student :null, 0) }} >
        <input type="checkbox" class="form-check-input" name="is_student" id="is_student_1" value=1 
          {{ Helper::display_checkbox_checked(old('is_student'), 
          isset($account->is_student)? $account->is_student: null, 1) }}    

        > Is this a Student ? 
      </label>
    </div>     

    <div class="form-group row" 
    style="display:none" id="student_reg_no_input">
        <label  class="col-5 form-control-label" for="student_reg_no"><strong>Students Registration Number * </strong></label>
        <div class="col-7">
          <input type="text" class="form-control  {{ $errors->has('student_reg_no') ? 'is-invalid' : '' }}" id="student_reg_no" name="student_reg_no" value="{{ old('student_reg_no', isset($account->student_reg_no) ? $account->student_reg_no : null) }}">

          <div class="invalid-feedback">
              {{  $errors->first('student_reg_no')   }}
          </div>
        </div>
    </div>

     <div class="form-check">
      <label class="form-check-label">
        <input type="hidden" class="form-check-input" name="is_subsidiary" id="is_subsidiary_0" value=0

           {{ Helper::display_checkbox_checked(old('is_subsidiary'), 
           isset($account->is_subsidiary)? $account->is_subsidiary: null, 0) }}

        >
        <input type="checkbox" class="form-check-input" name="is_subsidiary" id="is_subsidiary_1" value=1 

            {{ Helper::display_checkbox_checked(old('is_subsidiary'), 
           isset($account->is_subsidiary)? $account->is_subsidiary: null, 1) }}     

        > Is this customer a University Company or subsidiary?
      </label>
    </div>

    <div class="form-group row" style="display:none" id="subsidiary_info_input">
        <label  class="col-5 form-control-label" for="subsidiary_info"><strong>Please provide further information or call Ext. 24473 *</strong></label>
        <div class="col-7">
          <input type="text" class="form-control  {{ $errors->has('subsidiary_info') ? 'is-invalid' : '' }}" id="subsidiary_info" name="subsidiary_info" value="{{ old('subsidiary_info', isset($account->subsidiary_info) ? $account->subsidiary_info : null) }}">

          <div class="invalid-feedback">
              {{  $errors->first('subsidiary_info')  }}
          </div>
        </div>
    </div>     

    <div class="form-group row">
      <label class="col-5 form-control-label" for="company_name"><strong>Name of the Company/Person who will pay the invoice *</strong></label>
      <div class="col-7">
        <input type="text" class="form-control  {{ $errors->has('company_name') ? 'is-invalid' : '' }}" id="company_name" name="company_name" value="{{ old('company_name', isset($account->company_name) ? $account->company_name : null) }}">

        <div class="invalid-feedback">
            {{  $errors->first('company_name')   }}
        </div>
      </div>
    </div>

    <div class="form-group row">
        <label class="col-5 form-control-label" for="company_address_1"><strong>Address 1 *</strong></label>
        <div class="col-7">
          <input type="text" class="form-control  {{ $errors->has('company_address_1') ? 'is-invalid' : '' }}" id="company_address_1" name="company_address_1" value="{{ old('company_address_1', isset($account->company_address_1) ? $account->company_address_1 : null) }}" required>

          <div class="invalid-feedback">
              {{  $errors->first('company_address_1')   }}
          </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-5 form-control-label" for="company_address_2">Address 2 </label>
        <div class="col-7">
          <input type="text" class="form-control" id="company_address_2" name="company_address_2" value="{{ old('company_address_2', isset($account->company_address_2) ? $account->company_address_2 : null) }}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-5 form-control-label" for="col-5 company_address_3">Address 3 </label>
        <div class="col-7">
          <input type="text" class="form-control" id="company_address_3" name="company_address_3" value="{{ old('company_address_3', isset($account->company_address_3) ? $account->company_address_3 : null) }}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-5 form-control-label" for="company_town"><strong>Town/City *</strong></label>
        <div class="col-7">
          <input type="text" class="form-control {{ $errors->has('company_town') ? 'is-invalid' : '' }}" id="company_town" name="company_town" value="{{ old('company_town', isset($account->company_town) ? $account->company_town : null) }}" required>

          <div class="invalid-feedback">
            {{  $errors->first('company_town')  }}
          </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-5 form-control-label" for="company_postcode"><strong>Post Code *</strong></label>
        <div class="col-7">
          <input type="text" class="form-control {{ $errors->has('company_postcode') ? 'is-invalid' : '' }}" id="company_postcode" name="company_postcode" value="{{ old('company_postcode', isset($account->company_postcode) ? $account->company_postcode : null) }}" required>

          <div class="invalid-feedback">
            {{  $errors->first('company_postcode')  }}
          </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-5 form-control-label" for="company_reg_number">Registration Number </label>
        <div class="col-7">
          <input type="text" class="form-control" id="company_reg_number" name="company_reg_number" value="{{ old('company_reg_number', isset($account->company_reg_number) ? $account->company_reg_number : null) }}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-5 form-control-label" for="company_telephone"><strong>Telephone Number * </strong></label>
        <div class="col-7">
          <input type="text" class="form-control {{ $errors->has('company_telephone') ? 'is-invalid' : '' }}" id="company_telephone" name="company_telephone" value="{{ old('company_telephone', isset($account->company_telephone) ? $account->company_telephone : null) }}" required>

          <div class="invalid-feedback">
            {{  $errors->first('company_telephone')  }}
          </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-5 form-control-label" for="company_fax">Fax Number </label>
        <div class="col-7">
          <input type="text" class="form-control" id="company_fax" name="company_fax" value="{{ old('company_fax', isset($account->company_fax) ? $account->company_fax : null) }}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-5 form-control-label" for="company_email"><strong>Email Address * </strong>(Accounts Payable/Finance email address for companies/organisations): </label>
        <div class="col-7">
          <input type="email" class="form-control {{ $errors->has('company_email') ? 'is-invalid' : '' }}" id="company_email" name="company_email" value="{{ old('company_email', isset($account->company_email) ? $account->company_email : null) }}" required>

          <div class="invalid-feedback">
            {{  $errors->first('company_email')   }}
          </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-5 form-control-label" for="company_contact_name">Company Contact Name </label>
        <div class="col-7">
          <input type="text" class="form-control" id="company_contact_name" name="company_contact_name" value="{{ old('company_contact_name', isset($account->company_contact_name) ? $account->company_contact_name : null) }}">
        </div>
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="hidden" class="form-check-input" name="company_is_eu" id="company_is_eu_0" value=0 
        {{ Helper::display_checkbox_checked(old('company_is_eu'), 
          isset($account->company_is_eu) ? $account->company_is_eu : null, 0) }} 
        
        >
        <input type="checkbox" class="form-check-input" name="company_is_eu" id="company_is_eu_1" value=1  

         {{ Helper::display_checkbox_checked(old('company_is_eu'), 
          isset($account->company_is_eu)? $account->company_is_eu : 1, 1) }}  
         
        > <strong>Is the customer part of the EU? 
            <br> (if no, please untick the box)
          </strong>
      </label>
    </div>     


    <!-- country -->
    <div style="display:visible" id="eu_country_selection">
        <div class="form-group row" >
            <label class="col-5 form-control-label" for="company_eu_country_id"><strong>Please select your EU country * </strong></label>
            <div class="col-7">
              <select class="form-control  {{ $errors->has('company_eu_country_id') ? 'is-invalid' : '' }}" id="company_eu_country_id" name="company_eu_country_id">
                  <option value="">Please make a selection</option>
                
                  @foreach($eu_countries as $eu_country)
                    <option value="{{ $eu_country->id }}"  
                     {{ 
                      Helper::display_dropdown_selected(old('company_eu_country_id'), isset($account->company_country_id) ? $account->company_country_id :null, $eu_country->id) 
                    }}
                     > 
                    {{ $eu_country->name}} 
                    </option>
                  @endforeach            
              </select>

              <div class="invalid-feedback">
                  {{  $errors->first('company_eu_country_id')   }}
              </div>
            </div>
          </div>

          <div class="form-group row">
                <label class="col-5 form-control-label" for="company_vat_reg_no"><strong>Please provide VAT number (Exc. UK) * </strong></label>

                <div class="col-7">
                  <input type="text" class="form-control  {{ $errors->has('company_vat_reg_no') ? 'is-invalid' : '' }}" id="company_vat_reg_no" name="company_vat_reg_no" value="{{ old('company_vat_reg_no', isset($account->company_vat_reg_no) ? $account->company_vat_reg_no : null) }}">                

                  <div class="invalid-feedback">
                     {{  $errors->first('company_vat_reg_no')   }}
                  </div>
                </div>
          </div>
      </div>

        

        <div class="form-group row" style="display:none" id="non_eu_country_selection">

          <label class="col-5 form-control-label" for="company_non_eu_country_id"><strong>If non EU, please select a non-EU country * </strong></label>

          <div class="col-7">
              <select class="form-control  {{ $errors->has('company_non_eu_country_id') ? 'is-invalid' : '' }}" id="company_non_eu_country_id" name="company_non_eu_country_id">
                <option value="">Please make a selection</option>
            
                @foreach($non_eu_countries as $non_eu_country)
                  <option value="{{ $non_eu_country->id }}"
                  {{ 
                    Helper::display_dropdown_selected(old('company_non_eu_country_id'), isset($account->company_country_id) ? $account->company_country_id :null, $non_eu_country->id) 
                  }}           
                  >
                  {{ $non_eu_country->name}}
                  </option>
                @endforeach
              
              </select>
            </div>

          <div class="invalid-feedback">
              {{  $errors->first('non_eu_company_country_id')   }}
          </div>
        </div>

    <!-- vat number -->

    <div class="form-check">
      <label class="form-check-label">
        <input type="hidden" class="form-check-input" name="is_charity_or_eligible_body" id="is_charity_or_eligible_body_0" value=0
        {{ Helper::display_checkbox_checked(old('is_charity_or_eligible_body'), 
          isset($account->is_charity_or_eligible_body)? $account->is_charity_or_eligible_body:null, 0) }}   
        >
        <input type="checkbox" class="form-check-input" name="is_charity_or_eligible_body" id="is_charity_or_eligible_body_1" value=1    
            {{ Helper::display_checkbox_checked(old('is_charity_or_eligible_body'), 
          isset($account->is_charity_or_eligible_body)? $account->is_charity_or_eligible_body:null, 1) }}     
        > Is the customer a charity or eligible body?
      </label>
    </div>    

<!-- eligible body select list-->

  <div class="form-group row" style="display:none" id="charity_eligible_body_selection">

    <div class="col-5 form-control-label" ><p>If <strong>yes</strong>, please make a selection from the list *</p></div>

    <div class="col-7"> 
     
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input  {{ $errors->has('company_eligibility') ? 'is-invalid' : '' }}" name="company_eligibility" id="company_eligibility_1" value="UK University"   
           {{ Helper::display_radio_checked(old('company_eligibility'), isset($account->company_eligibility)? $account->company_eligibility:null, 'UK University') }} 
         >
          UK University
        </label>
      </div>

      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input  {{ $errors->has('company_eligibility') ? 'is-invalid' : '' }}" name="company_eligibility" id="company_eligibility_2" value="UK School/College"
          {{ Helper::display_radio_checked(old('company_eligibility'), isset($account->company_eligibility)? $account->company_eligibility :null , 'UK School/College') }}
          >
          UK School/College
        </label>
      </div>

      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input  {{ $errors->has('company_eligibility') ? 'is-invalid' : '' }}" name="company_eligibility" id="company_eligibility_3" value="UK Government Dept"
              {!! Helper::display_radio_checked(old('company_eligibility'), isset($account->company_eligibility)? $account->company_eligibility: null, 'UK Government Dept') !!}
        >
          UK Government Dept
        </label>
      </div>

      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="company_eligibility" id="company_eligibility_4" value="UK Charity"
           {!! Helper::display_radio_checked(old('company_eligibility'), isset($account->company_eligibility) ? $account->company_eligibility: null, 'UK Charity') !!}
          >
          UK Charity
        </label>
      </div>

      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="company_eligibility" id="company_eligibility_5" value="UK Research Council"
             {!! Helper::display_radio_checked(old('company_eligibility'), isset($account->company_eligibility) ? $account->company_eligibility :null, 'UK Research Council') !!}
             >
          UK Research Council
        </label>
      </div>

      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="company_eligibility" id="company_eligibility_6" value="UK Hospital"
          {{ Helper::display_radio_checked(old('company_eligibility'), isset($account->company_eligibility) ? $account->company_eligibility :null, 'UK Hospital') }}
          >
          UK Hospital  
        </label>
      </div>

      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="company_eligibility" id="company_eligibility_7" value="Other"
           {{ Helper::display_radio_checked(old('company_eligibility'), isset($account->company_eligibility)? $account->company_eligibility :null, 'Other') }}
          >
          Other
        </label>
      </div>

      <div class="form-group">
            <label class="form-control-label" for="company_eligibility_other">Explain others</label>
              <input type="text" class="form-control" id="company_eligibility_other" name="company_eligibility_other" value="{{ old('company_eligibility_other', isset($account->company_eligibility_other) ? $account->company_eligibility_other : null) }}">
      </div>

      <div class="invalid-feedback">
            {{  $errors->first('company_eligibility')   }}
      </div>

    </div>
    
  </div>


    <div class="form-group row">
      <label class="col-5 form-control-label" for="company_notes">Other relevant information</label>
      <div class="col-7">
        <textarea class="form-control" id="company_notes" name="company_notes" rows="5">{{ old('company_notes', isset($account->company_notes) ? $account->company_notes : null) }}</textarea>
      </div>
    </div>

  </fieldset>

  <div class="form-group row">
      <div class="offset-6">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>


