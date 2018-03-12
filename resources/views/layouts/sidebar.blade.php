<nav class="col-md-2 d-none d-md-block bg-light sidebar">
	<div class="sidebar-sticky">
	
          <ul class="nav flex-column">
          	
          	@if (Auth::check())
          	  <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  All <span class="sr-only">(current)</span>
                </a>
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

			
					
			@if (Auth::user() && Auth::user()->role->id == 2)

			<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Super Admin Only</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>

	          <ul class="nav flex-column mb-2">
	             <li class="nav-item">
				    <a class="nav-link" href="/users">Users Management</a> 
				 </li>       
	          </ul> 
			@endif 

	</div>   
</nav>

