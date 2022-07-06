<x-layout>
    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>sixteen products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li>
              </ul>
            </div>
          </div>
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
            <div>
              <form action="" method="get">
                @csrf
                <input type="text" name="search" placeholder="Search our database" value="{{ request['search'] }}">
              </form>
            </div>
            <div class="filters-content">
                <div class="row grid">
                   @forelse($cars as $car)
                   <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="/cars/{{ $car->slug }}"><img src="{{asset('storage/' . $car->thumbnail)}}" alt="" class="img-responsive"></a>
                        <div class="down-content">
                        
                           <a href="/cars/{{ $car->slug }}"><h4>{{ $car->model }}</h4></a>
                           <h6> Price: {{ $car->price }}$</h6>
                         
                          <p>{{ $car->excerpt }}</p>
                          <a href="/categories/{{ $car->category->slug }}"><p>Category: {{ $car->category->name }}</p></a>
                          <span>Published at <time>{{ $car->created_at->diffForHumans() }}</time> by <a href="/owners/{{ $car->owner->username }}">{{ $car->owner->username }}</a></span>
                        </div>
                      </div>
                    </div>
                   @empty
                    <p>Sorry, there are no listed cars at this moment.</p>
                   @endforelse
                 
                
                </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="mx-auto">
              {{ $cars->links() }}
            </div>
          </div>
         
          
        </div>
      </div>
    </div>

</x-layout>