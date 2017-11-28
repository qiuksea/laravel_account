
@extends ('layouts.uni')

@section ('content')		
	
		<a href="/accounts/create" class="btn btn-primary">New Account Form</a>
		<hr>

	    <table class="table table-bordered">
		  <thead class="table-primary">
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

@endsection
