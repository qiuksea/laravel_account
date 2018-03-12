@extends ('layouts.uni')

@section ('content')
 					
 					@if (session('login_error'))
                        <div class="alert alert-danger">
                            {{ session('login_error') }}
                        </div>
                    @endif                     

                 
	<div class="col-md-10">		
		
			<a href="/accounts/create" class="btn btn-primary">New Account Form</a>
			<hr>

		    <table class="table table-hover table-bordered">
			  <thead class="table-info">
			    <tr>
			    	  <th>Reference</th>
				      <th>Name</th>
				      <th>Company</th>
				      <th>Requested</th>
				      <th>Status</th>
				      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			    @foreach ($accounts as $account)

					@include ('accounts.partials.account')

		    	@endforeach
			   
			  </tbody>
			</table>
	</div>

<hr>

	@if (session()->has('user_info')) 
						
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h5 class="card-title">This is you: </h5>
							
								<p class="card-text">
										Email: {{ session('user_info.email') }} <br>
										<strong>Role id:</strong> {{ Auth::user() ->role_id }} <br>
										Uid: {{ session('user_info.uid')}} <br>
										First Name: {{ session('user_info.firstname')}} <br>
										Last Name: {{ session('user_info.lastname')}} <br>
										User Type: {{ session('user_info.user_type')}} <br>              
										Dep.: {{ session('user_info.department')}} <br>
								</p>
					
							</div>
						</div>
                    @endif  

@endsection
