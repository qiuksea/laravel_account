
@extends ('layouts.master')


@section ('content')
	<div class="col-md-12">		
	
		<a href="/accounts/create " class="btn btn-info btn-sm">Create</a>
		<hr>

	    <table class="table">
		  <thead>
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
