
@extends ('layouts.master')


@section ('content')

	<div class="col-md-12">		

	    <table class="table">
		  <thead>
		    <tr>
		      <th>Name</th>
		      <th>Tel</th>
		      <th>Email</th>
		      <th>Notes</th>
		      <th>Student?</th>
		      <th>Create at</th>
		      <th>Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach ($accounts as $account)

				@include ('accounts.account')

	    	@endforeach
		   
		  </tbody>
		</table>

	</div>

@endsection
