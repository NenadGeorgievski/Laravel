<x-layout>
<div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>{{ $car->model }}</h4>
            
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          
          
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                   
                   <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item" >
                        <a href="/cars/{{ $car->slug }}"><img src="{{asset('storage/' . $car->thumbnail)}}" alt="" class="img-responsive"></a>
                        <div class="down-content">
                        
                           <a href="/cars/{{ $car->slug }}"><h4>{{ $car->model }}</h4></a>
                           <h6> Price: {{ $car->price }}$</h6>
                         
                          <p>{{ $car->excerpt }}</p>
                          <a href="/categories/{{ $car->category->slug }}"><p>Category: {{ $car->category->name }}</p></a>
                         
                          <span>Published at <time>{{ $car->created_at->diffForHumans() }}</time></span>
                        </div>
                      </div>
                    </div>
                   
                
                 
                
                </div>
            </div>
          </div>
         
        </div>
        <div class="row">
          <div>
             <p>{{ $car->body }}  </p>
          </div>
          <div>
             <p>  Submitted by <a href="/owners/{{ $car->owner->username }}">{{ $car->owner->username }}</a></p>
          </div>           

          
        </div>
       @auth 
          <div style="display: inline-block;">
                <a href="/cars/{{ $car->slug }}/edit" class="btn btn-primary">Edit Info!</a>
                
                <form action="{{ route('delete', $car->slug) }}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger" type="submit">Delete Entry!</button>
                </form>
            </div>
       @endauth
  
        
     
      </div>
    </div>
</x-layout>