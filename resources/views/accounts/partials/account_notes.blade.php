<ul class="list-group">
	 	@foreach( $account-> notes as $note)

		  <li class="list-group-item">

		  	{{ $note -> created_at  }} <br>

		  	{{  $note->content }}

		  </li>
	  	@endforeach
</ul>