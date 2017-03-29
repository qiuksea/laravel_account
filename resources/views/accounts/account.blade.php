<div>
		<a href="/accounts/{{ $account-> id }}">{{ $account ->name}} </a>	

		<p> {{ $account ->email }}</p>
		<p> {{ $account ->notes }}</p>
		<p> {{ $account ->is_stu }}</p>
		<p> {{ $account ->created_at -> toFormattedDateString()  }}</p>	
		<hr>				

</div>

