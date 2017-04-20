@extends('layouts.master')

@section('content')

	<form method="POST" action="/accounts/{{ $account-> id }}">
	    <div class="form-group">
	    	{{ method_field('DELETE') }}
	    
	    	<label for="destroy">Delete</label>
	       	<input name="id" class="form-control">
	       	<div class="form-group">
	       		<button type="submit" class="btn btn-danger">Delete</button>
	    	</div>
	    </div>
	    @include ('layouts.errors')
	</form>

@endsection

<!-- https://laracasts.com/discuss/channels/laravel/how-can-i-delete-record-laravel-53 -->