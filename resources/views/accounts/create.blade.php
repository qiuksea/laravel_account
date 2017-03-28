@extends ('layouts.uni')

@section ('content')

<h3>Customer Account Request</h3>
<hr>
<form method="POST" action="/accounts">
  {{csrf_field() }}

  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
  </div>

  <div class="form-group">
    <label for="tel">Tel</label>
    <input type="text" class="form-control" id="tel" name="tel">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  

  <div class="form-group">
    <label for="notes">Notes</label>
    <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
  </div>
 

  <fieldset class="form-group">
    <legend>Company Details</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="is_stu" id="is_stu" value="1">
        Is this a Student?
      </label>
    </div>
   
  </fieldset>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

  
