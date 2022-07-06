<header class="max-w-4xl mx-auto mt-20 text-center">      
            <div class="max-w-xl mx-auto">
                <h1 class="text-4xl">
                    Latest <span class="text-blue-500">Laravel From Scratch</span>  News
                </h1>
                              
                <div class="tw-flex tw-justify-center space-y-2 lg:space-y-0 lg:space-x-4 mt-<!--  -->">
                    <div class="relative lg:inline-flex bg-gray-100 rounded-xl">

                     <x-category-dropdown>
                     
                     </x-category-dropdown>

                    
 

 
                       
                    </div> 
                    <!-- <span class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                        <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold"> 
                            <option value="category" disabled selected>Other Filters</option>
                            <option value="foo">Foo</option>
                            <option value="bar">Bar</option>
                        </select>
                        <svg class="transform -rotate-90 absolute pointer-events-none" width="19" height="19" viewBox="0 0 22 22" style="right:12px;"><g fill="none" fill-rule="evenodd"><path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path> <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path></g></svg>
                    </span> -->
                    
                    <span class="relative lg:inline-flex flex items-center bg-gray-100 rounded-xl px-3 py-2">
                      <form action="" method="get">  
                      @if(request('category'))
                          <input type="hidden" name="category" value="{{ request('category') }}">
                      @endif
                      @csrf
                          <input type="text" name="search" placeholder="Find something" class="placeholder-black bg-transparent font-semibold text-sm" value="{{ request('search') }}">
                      </form>
                      
                    </span>
                </div>
            </div>  
        </header> 