 {{csrf_field() }}
 
  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ old('name', isset($account->name) ? $account->name : null) }}">
  </div>

  <div class="form-group">
    <label for="tel">Tel</label>
    <input type="text" class="form-control" id="tel" name="tel" value="{{ old('tel', isset($account->tel) ? $account->tel : null) }}">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email', isset($account->email) ? $account->email : null) }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  

  <div class="form-group">
    <label for="notes">Notes</label>
    <textarea class="form-control" id="notes" name="notes" rows="3">{{ old('notes', isset($account->notes) ? $account->notes : null) }}</textarea>
  </div>
 

  <fieldset class="form-group">
    <legend>Company Details</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="hidden" class="form-check-input" name="is_stu" id="is_stu_0" value="0">
        <input type="checkbox" class="form-check-input" name="is_stu" id="is_stu_1" value="1"    
            @if(old('is_stu'))
              checked
            @endif     
            @if(isset($account->is_stu) && $account->is_stu) )
              checked
            @endif
        > Is this a Student?
      </label>
    </div>
   
  </fieldset>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>


