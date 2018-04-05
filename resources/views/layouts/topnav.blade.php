<header>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">

        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="https://www.sheffield.ac.uk/">MUSE</a>     
        
          <ul class="navbar-nav mr-auto">  
            <li class="nav-item active">
                  <a class="nav-link" href="#">
                    Hello, 
                    {{ session('user_info.firstname') }} {{ session('user_info.lastname') }} ( 
                    {{ session('user_info.email') }} )
                  </a> 
            </li>
          </ul>   

        <ul class="navbar-nav px-3"> 
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="/auth/logout">Logout<span class="sr-only">(current)</span></a>
            </li>
        </ul>      
       
</nav>
</header>

