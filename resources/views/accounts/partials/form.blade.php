 {{csrf_field() }}
 
  <fieldset class="form-group">
    <legend>Your Details</legend>

      <div class="form-group">
        <label for="name" >name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ old('name', isset($account->name) ? $account->name : null) }}">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email', isset($account->email) ? $account->email : null) }}">
      </div>

      <div class="form-group">
        <label for="tel">Tel</label>
        <input type="text" class="form-control" id="tel" name="tel" value="{{ old('tel', isset($account->tel) ? $account->tel : null) }}">
      </div>

      <div class="form-group">
       <p><strong>Is the value of this project/contract over £10,000.00?*</strong></p>
       
       <p>If yes please contact the Income Office at: incomeofficehelp@sheffield.ac.uk to obtain a credit check of the company, as stated in section 9.8 of the University's Financial Regulations, before proceeding any further.
       </p>        
      </div>

      <div class="form-check form-check-inline">      
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="is_over_10k" id="is_over_10k_yes" value="1"
            @if(old('is_over_10k'))
              checked
            @endif        
            @if (isset($account->is_over_10k) && $account->is_over_10k) )
              checked
            @endif
            >Yes         
        </label>
      </div>

      <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="is_over_10k" id="is_over_10k_no" value="0"
            @if(!old('is_over_10k'))
              checked
            @endif        
            @if (isset($account->is_over_10k) && !$account->is_over_10k) )
              checked
            @endif
            >No
        </label>
      </div>

      <div class="form-group hidden" style="display:none" id="project_credit_check">
        <p>If yes, have you obtained a credit check from the income office?</p>     

        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" name="company_project_check_agree" type="checkbox"> Yes, I have obtained a credit check 
          </label>
        </div>
        
        <div class="form-group">
          <label for="credit_check">Who did the credit check for you?</label>
          <input type="text" class="form-control" id="who_credit_check" name="who_credit_check" value="{{ old('who_credit_check', isset($account->who_credit_check) ? $account->who_credit_check : null) }}">
        </div>
      
      </div>





  </fieldset>
 

  <fieldset class="form-group">
    <legend>Company Details</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="hidden" class="form-check-input" name="iis_student" id="is_student_0" value="0">
        <input type="checkbox" class="form-check-input" name="is_student" id="is_student_1" value="1"    
            @if(old('is_student'))
              checked
            @endif     
            @if(isset($account->is_student) && $account->is_student) )
              checked
            @endif
        > Is this a Student?
      </label>
    </div>     

    <div class="form-group">
      <label for="notes">Any other relevant information:</label>
      <textarea class="form-control" id="notes" name="notes" rows="3">{{ old('notes', isset($account->notes) ? $account->notes : null) }}</textarea>
    </div>

  </fieldset>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>


