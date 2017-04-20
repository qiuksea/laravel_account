@extends('layouts.master')

@section('content')

<form method="POST" action="/accounts/{{ $account-> id }}">

 {{ method_field('PATCH') }}

 <input type="hidden" name="_token" value="{{ csrf_token() }}">

  @include ('accounts.partials/form')
    
  @include ('layouts.errors')

</form>


@endsection