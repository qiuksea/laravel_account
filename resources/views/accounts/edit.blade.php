@extends('layouts.uni')



@section('content')
<div class="col-md-8">

	<form method="POST" action="/accounts/{{ $account-> id }}">

	 {{ method_field('PATCH') }}

	  @include ('accounts.partials/form')

	</form>

</div>


@endsection