<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar pt-5">
	
          <ul class="nav nav-pills flex-column">
          	 <li class="nav-item">    
			  				
			  </li>
          	@if (Auth::check())
          	  <li class="nav-item">		    
			  	<a class="nav-link active" href="/accounts">All</a>			
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="/accounts?status=N">New Requests</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="/accounts?status=P">Pending Requests</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="/accounts?status=A">Await credit check</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="/accounts?status=Y">Complete Requests</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="/accounts?status=R">Rejected Requests</a>
			  </li>
			 @endif 
          </ul> 

          <hr>

          <ul class="nav nav-pills flex-column">
             <li class="nav-item">
			    <a class="nav-link" href="/accounts?status=R">User Management</a>
			    <p>Only Super Admin can view</p>
			  </li>       
          </ul> 
    
</nav>