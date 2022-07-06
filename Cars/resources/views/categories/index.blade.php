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
  
  
     <div class="products">
      <div class="container">
      <h2>These are all the categories</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                   
                   @forelse($categories as $category)
                   <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                      
                        <div class="down-content">
                        <a href="/categories/{{ $category->slug }}"> <h6> {{ $category->name }}</h6></a>
                          
                 
                        </div>
                      </div>
                    </div>
                   @empty
                    <p>Sorry, there are no added categories at this moment.</p>
                   @endforelse
                 
                
                </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="mx-auto">
              {{ $categories->links() }}
            </div>
          </div>
         
          
        </div>
      </div>
     </div>

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
