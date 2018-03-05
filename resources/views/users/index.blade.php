@extends ('layouts.uni')

@section ('content')

	<div class="col-md-10">	
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">
		Add User
	  	</button>
	  
	  <!-- Modal -->
	  <div class="modal fade" id="addUser" tabindex="-1" role="dialog" 
	  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">

			<form method="POST" action="/users">				

			<div class="modal-header">
			  <h5 class="modal-title" id="AddUserTitle">Add Admin Form</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
					<div class="modal-body">
							
								{{csrf_field() }}
								
								<div class="form-group row">
									<label class="col-md-2 col-form-label" for="email">Email</label>
									<div class="col-md-10">
										<input type="email" class="form-control col-md-6" name="email" id="email" aria-describedby="emailHelp">
									</div>					  
								</div>
			
								<div class="form-group row">
									<div class="col-md-2">Role</div>
									<div class="col-md-10">
										<div class="form-check">
												<input class="form-check-input" type="radio" name="role_id" id="role1" value="1" checked>
												<label class="form-check-label" for="role1">
														Admin
												</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="role_id" id="role2" value="2">
											<label class="form-check-label" for="role2">
													Super Admin
											</label>
										</div>
									</div>	
								</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<div class="col-md-10">
							<button type="submit" class="btn btn-primary">Add</button>
						</div>		
					</div>

					</form>
		  </div>
		</div>
		</div>
			
		<hr>
		
		<table class="table table-hover table-bordered">
			  <thead class="table-info">
			    <tr>
			    	  <th>ID</th>
				      <th>Email</th>
				      <th>Role</th>
				      <th>Disabled</th>
				      <th>Created at</th>
				      <th>Updated at</th>
							<th colspan="2">Action</th>
			    </tr>
			  </thead>
			  <tbody>
					@foreach ($users as $user)
						<tr id="user_{{$user->id}}">
								<td>
									{{ $user ->id}}
								</td>
							 <td>{{ $user ->email}} </td>

							 <form method="POST" action="/users/{{$user->id}}">
			
								{{csrf_field() }}
		
								{{ method_field('PATCH') }}
								<td>
									<input type="radio" name="role_id" value="1" {{ $user->hasRole('Admin') ? 'checked' : ''}} >Admin 
									<input type="radio" name="role_id" value="2" {{ $user->hasRole('Super Admin') ? 'checked' : ''}} >Super Admin
									</td>

								<td>{{ Helper::display_boolean($user ->disabled) }}</td>
						
								<td>{{ $user ->created_at -> toFormattedDateString()  }}</td>
							  <td>{{ $user ->updated_at -> toFormattedDateString()  }}</td>
														
								<td>
									<button type="submit" class="btn btn-primary btn-sm">Edit Role</button>
								</td>
							</form>
								<td>	
									<form method="POST" action="/users/{{$user->id}}">
										{{csrf_field() }}	

										{{ method_field('DELETE') }}

										<button type="submit" 
									
										class="btn btn-danger btn-sm">Delete User</button>

									</form>								

								</td>

							</tr>

				

		    	@endforeach
			   
			  </tbody>
			</table>

	</div>

@endsection
