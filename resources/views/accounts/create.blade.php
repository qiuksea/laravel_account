@extends ('layouts.master')

@section ('content')

<h3>Customer Account Request</h3>
<hr>
<form method="POST" action="/accounts">

  {{csrf_field() }}

  @include ('accounts.partials/form')
    
  @include ('layouts.errors')

</form>



@endsection

  
