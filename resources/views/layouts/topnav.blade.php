<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
        <a class="navbar-brand" href="https://www.sheffield.ac.uk/">MUSE</a>


        <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
       </button>


        <div class="collapse navbar-collapse" id="navbarsDefault">
          <ul class="navbar-nav mr-auto">
              
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                  <a class="nav-link" href="#">Hello, {{ session('user_info.email') }}</a> 
            </li>
            
            <li class="nav-item">
                          
            </li>
            <li class="nav-item">
               <!--<a class="nav-link" href="#">Settings</a>-->              
            </li>
            <li class="nav-item">
             
            </li>
          </ul>
       
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                
            </li>  
 
            <li class="nav-item active">
                <a class="nav-link" href="/auth/logout">Logout<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
</nav>