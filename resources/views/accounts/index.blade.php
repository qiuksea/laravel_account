
@extends ('layouts.uni')


@section ('content')
	<ul>
	    @foreach ($accounts as $account)
	        <li>
	            <a href="/accounts/{{ $account-> id }}">{{ $account ->name}} 
	            </a>
	        </li>
	    @endforeach 
	</ul>
@endsection
