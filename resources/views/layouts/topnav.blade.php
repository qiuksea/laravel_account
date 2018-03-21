<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="https://www.sheffield.ac.uk/">MUSE</a>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button> 


        <div class="collapse navbar-collapse" id="navbarsDefault">
          <ul class="navbar-nav mr-auto">
              
            <li class="nav-item active">
              <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                  <a class="nav-link" href="#">
                    Hello, 
                    {{ session('user_info.firstname') }} {{ session('user_info.lastname') }} ( 
                    {{ session('user_info.email') }} )
                  </a> 
            </li>
            
            <li class="nav-item">
                          
            </li>
            <li class="nav-item">
               <!--<a class="nav-link" href="#">Settings</a>-->              
            </li>
            <li class="nav-item">
             
            </li>
          </ul>   
         
        </div>       

        <ul class="navbar-nav px-3"> 
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="/auth/logout">Logout<span class="sr-only">(current)</span></a>
            </li>
        </ul>      
       
</nav>

