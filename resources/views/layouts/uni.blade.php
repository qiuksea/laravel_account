<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link rel="icon" href="/uni/favicon.ico">

    <title>Finance Portal - The University of Sheffield</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link href="/css/dashboard.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/common.css" rel="stylesheet">       
    

  </head>

  <body>
    <header>
       @include ('layouts.topnav')
    </header>

    <div class="container-fluid">
      <div class="row">       
       
        @include ('layouts.sidebar')      

        <main role="main" class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
      
          
          <!--<div style="background:transparent !important" class="jumbotron">
          
           <h1>Finance -  Customer Account Request</h1>
                
          </div>-->

        <!--
          <section class="row text-center placeholders">

            <div class="col-8 col-sm-6 placeholder">
              @if ( Session::has('flash_message') )   
              <div class="alert {{ Session::get('flash_type') }}">
                <button type="button" class="close" data-dismiss="alert">x</button>
                 <h4>{{ Session::get('flash_message') }}</h4>
              </div>    
              @endif
            </div>        
          </section>-->

        <div>
           <img src="/img/index_banner.jpg" alt="The University of Sheffield" />
           
           <h1>Customer Account Request</h1>

           <hr>

         </div>

          <div class="table-responsive"> 
            
              @foreach (['danger', 'warning', 'success', 'info'] as $key)           

                  @if (session()->has($key))
                   <div class="col-8">
                      <div class="alert alert-{{ $key }}" role="alert">
                            <button type="button" class="close" data-dismiss="alert">x</button> 
                              <strong>{{ session()->get($key) }}</strong>
                      </div>
                    </div>
                  @endif

              @endforeach
            
            @include ('layouts.errors')

            @yield ('content') 

          </div>
        </main>
      </div>
    </div>

    @include ('layouts.footer')

    @include ('layouts.script')
    
  </body>
</html>
