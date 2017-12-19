   @extends ('layouts.uni')

   @section ('content')	   

	    <div class="col-md-10">


	    	@if (session()->has('user_info'))  

	    	<p> <strong>This is you: </strong><br>                

		        Email: {{ session('user_info.email') }} <br>
		       
		        Uid: {{ session('user_info.uid')}} <br>
		        First Name: {{ session('user_info.firstname')}} <br>
		        Last Name: {{ session('user_info.lastname')}} <br>
		        User Type: {{ session('user_info.user_type')}} <br>              
		        Dep.: {{ session('user_info.department')}} <br>
	    	</p>

	    	@endif 

	    	<p>
	    		You need to be an Admin to access the site. You can apply for Admin Role by contact finance-web@sheffield.ac.uk.
	    	</p>

	    	<p>
		    	If you are having trouble accessing your account or have any queries please contact:
				finance-web@sheffield.ac.uk
	    	</p>
		
		</div> 	   

    @endsection	