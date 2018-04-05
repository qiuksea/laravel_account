<div class="card border-primary mb-3">
	<div class="card-body">
		<form method="POST" action="/accounts/{{$account->id}}/notes">

			{{ csrf_field()}}
			
			<div class="form-group">
			  	<label for="note"><strong>Add Note</strong></label>
	    		<textarea class="form-control" id="content" name="content" required></textarea>
			</div>	

			<button type="submit" class="btn btn-primary">Submit</button>	

		</form>		
	</div>
</div>

<hr>

<div class="card border-info mb-3">
	<div class="card-body">
		<ul class="list-group list-group-flush">
				@foreach( $account-> allNotes()->get() as $note)

				<li class="list-group-item">

					{{ $note -> created_at  }}  by  note use name here <br>

					{{  $note->content }}

				</li>
				@endforeach
		</ul>
	</div>
</div>

