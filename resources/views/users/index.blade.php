@extends ('layouts.uni')

@section ('content')			

                 
	<div class="col-md-10">		
		
			<a href="/accounts/create" class="btn btn-primary">New User Form</a>
			<hr>

		    <table class="table table-hover table-bordered">
			  <thead class="table-info">
			    <tr>
			    	  <th>ID</th>
				      <th>Email</th>
				      <th>Role</th>
				      <th>Status</th>
				      <th>Created at</th>
				      <th>Updated at</th>
				      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			    @foreach ($users as $user)

					<tr id="user_{{$user->id}}">
				    	 <td>
				    		{{ $user ->id}}
				    	 </td>
						 <td>{{ $user ->email}} </td>
						 
					     <td>{{ $user ->role -> name }}</td>

					     <td>{{ $user ->disabled }}</td>
					
					     <td>{{ $user ->created_at -> toFormattedDateString()  }}</td>
						 <td>{{ $user ->updated_at -> toFormattedDateString()  }}</td>
						 					     
					     <td>
						     <a href="/users/{{ $user-> id }}/edit" class="btn btn-primary btn-sm">Edit</a> |
									      
							 <button class="btn btn-danger btn-sm delete-account" value="{{$user->id}}">Delete</button>
					     </td>
			    	</tr>

		    	@endforeach
			   
			  </tbody>
			</table>
	</div>

@endsection
