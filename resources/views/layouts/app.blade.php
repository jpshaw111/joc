
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Job Order Statement (JOS) Generation System</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <header>
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#">JOS</a>
     

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

          @if (request()->routeIs('create-type-of-work') || request()->routeIs('listing-type-of-work'))
          <li class="nav-item dropdown active">
             @else

             <li class="nav-item dropdown">

          @endif
       
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Type of Work</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{ route('create-type-of-work') }}">Create</a>
              <a class="dropdown-item" href="{{ route('listing-type-of-work') }}">View</a>
              
            </div>
          </li>
          
        
            
            
          @if (request()->routeIs('create-contractors') || request()->routeIs('listing-contractors'))
          <li class="nav-item dropdown active">
             @else

             <li class="nav-item dropdown">

          @endif
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contractors</a>
            <div class="dropdown-menu" aria-labelledby="dropdown02">
              <a class="dropdown-item" href="{{ route('create-contractors') }}">Create</a>
              <a class="dropdown-item" href="{{ route('listing-contractors') }}">View</a>
              
            </div>
             
            </li>


              @if (request()->routeIs('create-conductors') || request()->routeIs('listing-conductors'))
          <li class="nav-item dropdown active">
             @else

             <li class="nav-item dropdown">

          @endif

           <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conductors</a>
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a class="dropdown-item" href="{{ route('create-conductors') }}">Create</a>
              <a class="dropdown-item" href="{{ route('listing-conductors') }}">View</a>
              
            </div>


            
            </li>




                @if (request()->routeIs('create-job-orders') || request()->routeIs('listing-job-orders'))
          <li class="nav-item dropdown active">
             @else

             <li class="nav-item dropdown">

          @endif

           <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Job Orders</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="{{ route('create-job-orders') }}">Create</a>
              <a class="dropdown-item" href="{{ route('listing-job-orders') }}">View</a>
              
            </div>
             
            </li>




             @if (request()->routeIs('create-job-order-statements') || request()->routeIs('view-jos'))
          <li class="nav-item dropdown active">
             @else

             <li class="nav-item dropdown">

          @endif
           <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">JOS</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="{{ route('create-job-order-statements') }}">JOS Management</a>
              <a class="dropdown-item" href="{{ route('view-jos') }}">View All JOS</a>
              
            </div>
             
            </li>
          
        </ul>
        
      </div>
    </nav>
      <!-- Fixed navbar -->
     
    </header>

    <!-- Begin page content -->
    <main role="main" class="container mt-3">
    @yield('content')
     
    </main>

   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
