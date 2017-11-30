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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <header>
       @include ('layouts.topnav')
    </header>

    <div class="container-fluid">
      <div class="row">
       
       @include ('layouts.sidebar')

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-5">
          <div class="jumbotron">
            <!--<img src="/img/crest-l.gif" alt="The University of Sheffield" />-->
            <h1>Finance</h1>
            <h2>Customer Account Request</h2>            
          </div>

          <section class="row text-center placeholders">
            <div class="col-8 col-sm-6 placeholder">
              @if ( Session::has('flash_message') )   
              <div class="alert {{ Session::get('flash_type') }}">
                 <h4>{{ Session::get('flash_message') }}</h4>
              </div>    
              @endif
            </div>            
          </section>

          <h2>Section</h2>
          <div class="table-responsive">

            @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block" class="col-md-8">
                <button type="button" class="close" data-dismiss="alert">x</button> 
                      <strong>{{ $message }}</strong>
              </div>
            @endif
            
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
