
@extends ('layouts.master')


@section ('content')

	<div class="col-md-8 blog-main">		

	    @foreach ($accounts as $account)

			@include ('accounts.account')

	    @endforeach 

	</div>

@endsection
