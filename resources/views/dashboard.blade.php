   @extends ('layouts.uni')

   @section ('content')	   

	    <div class="col-md-10"> 		
			
			<div class="alert alert-warning" role="alert">
					<h4 class="alert-heading">Sorry,</h4>
					<p>You don't have the permission to access the site.</p>
					
			</div>

			<div class="jumbotron jumbotron-fluid">
					<div class="container">
					 
					  <p class="lead">
							By applying for the permission, please contact
							<a href="mailto:finance-web@sheffield.ac.uk">finance-web@sheffield.ac.uk</a></p>
							<hr>
							<p class="lead"> 
									If you are having trouble accessing your account or have any queries, 
									please contact:
									<a href="mailto:finance-web@sheffield.ac.uk">finance-web@sheffield.ac.uk</a>
							</p>
					  </p>
					</div>
			</div>
			@if (session()->has('user_info'))  
			<div class="card" style="width: 18rem;">
					<div class="card-body">
					  <h5 class="card-title">This is you: </h5>
				
					  <p class="card-text">
							Email: {{ session('user_info.email') }} <br>
				
							Uid: {{ session('user_info.uid')}} <br>
							First Name: {{ session('user_info.firstname')}} <br>
							Last Name: {{ session('user_info.lastname')}} <br>
							User Type: {{ session('user_info.user_type')}} <br>              
							Dep.: {{ session('user_info.department')}} <br>
					  </p>
		
					</div>
			</div>
			@endif 	
		
		</div> 	   

    @endsection	