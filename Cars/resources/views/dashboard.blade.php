<x-layout>
     <!-- Banner Starts Here -->
     <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div x-data="{ show:false }" @click.away = "show = false" class="py-2">

              <button @click="show = !show" class="py-2 pl-3 text-sm font-semibold" >
                {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
              </button>

              <div x-show="show" style="display: none;">
              @foreach($categories as $category)
                <a href="/categories/{{ $category->slug }}" class="d-block text-sm text-left px-3 text-reset" >{{ ucwords($category->name) }}</a>
              @endforeach 
              </div>
              
            </div>
            <div class="section-heading">
              <h2>Latest Entries</h2>
              <a href="/cars">view all cars <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          @forelse($cars as $car)
          <div class="col-md-4">
            <div class="product-item">
              <a href="/cars/{{ $car->slug }}"><img src="{{asset('storage/' . $car->thumbnail)}}" alt=""></a>
              <div class="down-content">
                <a href="/cars/{{ $car->slug }}"><h4>{{ $car->model }}</h4></a>
                <h6>${{ $car->price }}</h6>
                <p>{{ $car->excerpt }}</p>
                <a href="/categories/{{ $car->category->slug }}"><p>Category: {{ $car->category->name }}</p></a>
           
               
                
              </div>
            </div>
          </div>
          @empty
            <p>No new cars have been added recently.</p>
          @endforelse
        
        
        
         
        </div>
      </div>
      
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About CarShop</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best deals?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="/app-assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    
    
</x-layout>