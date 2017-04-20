@extends('layouts.master')

@section('content')

<form method="POST" action="/accounts/{{ $account-> id }}">

 {{ method_field('PATCH') }}

 {{csrf_field() }}

  @include ('accounts.partials/form')
    
  @include ('layouts.errors')

</form>


@endsection