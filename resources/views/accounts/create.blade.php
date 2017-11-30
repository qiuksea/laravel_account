@extends ('layouts.uni')

@section ('content')

<div class="col-8">	

	<div class="alert alert-warning" role="alert">
  		<p><strong>Before requesting a new account:</strong><br>
		Check that the customer does not already exist by using uBASE transaction VD03 and searching on the customer name (wildcard of * can be used here).
		</p>
	</div>

	<hr>

	<form method="POST" action="/accounts"> 

	  @include ('accounts.partials/form')    
	  

	</form>
</div>


@endsection

  
