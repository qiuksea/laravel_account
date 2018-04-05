<div class="card border-info mb-3">
	<ul class="list-group list-group-flush">

		@foreach ($account->allLogs()->get() as $log)

			<li class="list-group-item">

				{{ $log -> created_at }} <br>

				{{ $log -> content }} 

			</li>

		@endforeach

	</ul>
</div>
