@extends ('layouts.master')

@section ('content')

<div class="col-md-8">	
	<h3>Customer Account Request</h3>
	<hr>
	<form method="POST" action="/accounts"> 

	  @include ('accounts.partials/form')
	    
	  @include ('layouts.errors')

	</form>
</div>



@endsection

  
