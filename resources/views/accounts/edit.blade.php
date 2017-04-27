@extends('layouts.master')

@section('content')

<form method="POST" action="/accounts/{{ $account-> id }}">

 {{ method_field('PATCH') }}

  @include ('accounts.partials/form')

</form>


@endsection