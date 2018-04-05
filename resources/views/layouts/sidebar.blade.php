<nav class="col-md-2 d-none d-md-block bg-light sidebar">
	<div class="sidebar-sticky">

      <ul class="nav flex-column">
          	
          @if (Auth::check())
          	  <li class="nav-item">
                <a class="nav-link {{ Request::is('accounts') || Request::is('/')  ? 'active': ''}}" href="/">
                  <span data-feather="home"></span>
                  All 
                </a>
              </li>
							<li class="nav-item">
								<a class="nav-link"	href="/accounts?status=N"><span data-feather="file"></span> New Requests</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/accounts?status=P"><span data-feather="watch"></span> Pending Requests</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/accounts?status=A"><span data-feather="credit-card"></span> Await credit check</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/accounts?status=Y"><span data-feather="thumbs-up"></span> Complete Requests</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/accounts?status=R"><span data-feather="thumbs-down"></span> Rejected Requests</a>
							</li>
			 		@endif 

			</ul> 				

<div>Route: {{ Route::current()->getName()}}</div>

			
					
			@if (Auth::user() && Auth::user()->role->id == 2)

			<hr>

			<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
			</span>Super Admin Only</span>
      </h6>

	          <ul class="nav flex-column mb-2">
	             <li class="nav-item">
				    <a class="nav-link" href="/users"><span data-feather="users"></span>Users Management</a> 
				 </li>       
	          </ul> 
			@endif 

	</div>   
</nav>

<!-- http://sparklinghub.com/add-active-class-to-current-link-in-laravel-5/-->

