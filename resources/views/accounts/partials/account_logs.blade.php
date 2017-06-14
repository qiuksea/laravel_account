<ul class="list-group">

	 @foreach ($account->allLogs()->get() as $log)

		<li class="list-group-item">

			{{ $log -> created_at }} <br>

			{{ $log -> content }} 

		</li>

	 @endforeach

</ul>