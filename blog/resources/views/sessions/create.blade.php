<x-layout>
    <section class="px-6 py-8">
        <main class="mx-auto max-w-lg mt-10">
           <x-panel>
            <h1 class="text-xl font-bold text-center ">Log In</h1>  
            <form action="/login" method="post" class="mt-10">
                @csrf

                <x-form.input name="email" type="email" autocomplete="username"/>
                <x-form.input name="password" type="password" autocomplete="new-password"/>

                <x-form.button>Log In</x-form.button>

            </form>
           </x-panel>
        </main>
    </section>
</x-layout>        