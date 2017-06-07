<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link rel="icon" href="../../favicon.ico">

    <title>Account</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>  

    @include ('layouts.nav')

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Customer Account Request</h1>       
      </div>
    </div>    

    <div class="container">
      <div class="row">
<!--
      @if ( Session::has('flash_message') )
 
         <div class="alert {{ Session::get('flash_type') }}">
           <h3>{{ Session::get('flash_message') }}</h3>
        </div>
  
      @endif -->

      @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block" class="col-md-8">
          <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
        </div>
      @endif

      @include ('layouts.errors')

      @yield ('content')       

      </div>

    </div>


    @include ('layouts.footer')

    @include ('layouts.script')
        
  </body>
</html>
   