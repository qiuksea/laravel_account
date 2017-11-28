<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar pt-5">
          
          <ul class="nav nav-pills flex-column">
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
			    <a class="nav-link" href="{{ route('accounts', ['status' => 'R']) }}">Rejected Requests</a>
			  </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            @yield ('sidebar_2')        
          </ul>      
</nav>