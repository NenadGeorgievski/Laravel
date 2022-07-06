<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <title>CarShop</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('app-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('app-assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/owl.css') }}">

  </head>

  <body>

<!--   ***** Preloader Start ***** -->
   <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
<!--     **** Preloader End *****  -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>CarShop</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 

              <li class="nav-item">
                <a class="nav-link" href="/cars">View All Cars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
              </li>
              @guest
                <li class="nav-item">
                  <a class="nav-link" href="/login">Log In</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/register">Register</a>
                </li>
              @endguest
 
              @auth
                <li class="nav-item">
                  <a class="nav-link" href="/cars/create">Add New Car</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/categories/create">Add New Category</a>
                </li>
               
                <li class="nav-item py-2">
                  <h6 class="nav-link text-white">Signed in as <span class="font-bold">{{ auth()->user()->username }}</span></h6>
                </li>
                <li class="nav-item">
                  <form action="/logout" method="post" class="nav-link">
                      @csrf 
                      <button type="submit">Log Out</button>
                  </form>
                </li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <!-- Page Content -->
    {{ $slot }}

    <x-flash></x-flash>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 CarShop
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">CarShop</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('app-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('app-assets/js/custom.js') }}"></script>
    <script src="{{ asset('app-assets/js/owl.js') }}"></script>
    <script src="{{ asset('app-assets/js/slick.js') }}"></script>
    <script src="{{ asset('app-assets/js/isotope.js') }}"></script>
    <script src="{{ asset('app-assets/js/accordions.js') }}"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
