
@extends ('layouts.uni')

@section ('content')	
<div class="col-md-10">		
	
		<a href="/accounts/create" class="btn btn-primary">New Account Form</a>
		<hr>

	    <table class="table table-hover table-bordered">
		  <thead class="table-info">
		    <tr>
		    	  <th>Reference</th>
			      <th>Name</th>
			      <th>Company</th>
			      <th>Requested</th>
			      <th>Status</th>
			      <th>Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach ($accounts as $account)

				@include ('accounts.partials.account')

	    	@endforeach
		   
		  </tbody>
		</table>
</div>
@endsection
