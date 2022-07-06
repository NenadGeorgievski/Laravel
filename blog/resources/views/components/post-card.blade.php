@props(['post'])

<article 
    {{ $attributes->merge(['class' => "transition-colors duration-300  hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl"]) }}> 
    <div class="px-5 py-6">
        <div>
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post Illustration" class="rounded-xl">
        </div>
        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                   <x-category-button :category="$post->category"></x-category-button>
                    
                </div>
                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>
                    <span class="block text-gray-400 text-xs mt-2">
                        Published  <time >{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                    
                </div>
            </header>
            <div class="text-sm mt-4">
               <p>{{ $post->excerpt }}</p>
            </div>
            <footer class="flex items-center justify-between mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Larry's avatar">
                    <div class="ml-3">
                        <h5 class="font-bold"><a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a></h5>
                    
                    </div>
                    
                </div>
                <div>
                    <a href="/posts/{{ $post->slug }}" class="text-xs font-semibold bg-gray-200 rounded-full py-2 px-8">Read More</a>
                </div>
                
            </footer>
        </div>
    </div>
</article>