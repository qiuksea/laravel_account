

<div class="card">
	<div class="card-block">
		<form method="POST" action="/accounts/{{$account->id}}/notes">

			{{ csrf_field()}}
			
			<div class="form-group">
			  	<label for="note"><strong>Add Note</strong></label>
	    		<textarea class="form-control" id="content" name="content" required></textarea>
			</div>
			<div class="form-group">
			    <button type="submit" class="btn btn-primary">Submit</button>
			</div>

		</form>		
	</div>
</div>

<hr>

<ul class="list-group">
	 	@foreach( $account-> allNotes()->get() as $note)

		  <li class="list-group-item">

		  	{{ $note -> created_at  }} <br>

		  	{{  $note->content }}

		  </li>
	  	@endforeach
</ul>