
@extends ('layouts.master')


@section ('content')
	<div class="col-md-12">		
	
		<a href="/accounts/create " class="btn btn-info btn-sm">Create</a>
		<hr>

		<ul class="nav">
		  <li class="nav-item">		    
		  <a class="nav-link" href="/accounts">All</a>			
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="/accounts?status=N">New Requests</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="/accounts?status=P">Pending Requests</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="/accounts?status=A">Await credit check</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="/accounts?status=Y">Complete Requests</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="{{ route('accounts', ['status' => 'R']) }}">Rejected Requests</a>
		  </li>
		</ul>

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
