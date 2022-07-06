<!doctype html>



<title>Laravel from scratch blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif;">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="">
                    <img src="/images/logo.svg" alt="Laracast logo" width="165" height="16">
                </a>
            </div>
            <div class="mt-8 md:mt-0 flex items-center">
            @auth
                <x-dropdown>
                    <x-slot name="trigger">
                       <button class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}</button>
                    </x-slot>
                    @admin
                        <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Dashboard</x-dropdown-item>
                        <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                    @endadmin
                    <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()" >Log Out</x-dropdown-item>
                    <form id="logout-form" action="/logout" method="post" class="hidden">
                        @csrf  
                    
                    </form>
                </x-dropdown>

                
            @else
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="ml-6 text-xs font-bold uppercase">Login</a>
            @endauth
              
                <a href="#newsletter" class="bg-blue-500 rounded-full ml-3 text-xs font-semibold text-white uppercase py-3 px-5">Subscribe for updates</a>
            </div>
        </nav>
    
       {{ $slot }}

      
        <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center px-10 py-16 mt-16">
            <img src="/images/lary-newsletter-icon.png" alt="" class="mx-auto" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts.</h5>
            <p class="text-sm">Promise to keep the inbox clean. No bugs.</p>
            <div class="mt-10">
                <div class="relative inline-block rounded-full mx-auto bg-gray-200">
                 <form action="newsletter" method="post" class="lg:flex text-sm">
                     @csrf
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:tw-inline-block">
                                <img src="/images/mailbox-icon.svg" alt="Mailbox letter">
                            </label>
                            <div>
                                <input type="text" id="email" name="email" placeholder="Your email address." class="lg:bg-transparent pl-4 focus-within:outline-none">
                                @error('email')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                   
                        <button class="bg-blue-500 mt-4 lg:mt-0 hover:bg-blue-600 rounded-full lg:ml-3 text-xs font-semibold text-white uppercase py-3 px-8" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
   <x-flash></x-flash>
</body>
