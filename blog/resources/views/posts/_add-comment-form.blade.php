@auth
    <x-panel>

    <form action="/posts/{{ $post->slug }}/comments" method="post">
    @csrf

        <header class="flex items-center">

            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">

            <h2 class="ml-4">Want to participate?</h2> 

        </header>

        <x-form.field>
        <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" placeholder="Quick, think of something to say!" id="" rows="5" required></textarea>

        <x-form.error name="body" />
        </x-form.field>


        <div class="flex justify-end mt-6 border-t pt-6 border-gray-200">

          <x-form.button>Post</x-form.button>

        </div>
    </form>

    </x-panel>

    @else
    <p class="font-semibold">

        <a href="/register" class="hover:underline">Regiser</a> or <a href="/login" class="hover:underline">Log in</a> to participate in the conversation.

    </p>
@endauth