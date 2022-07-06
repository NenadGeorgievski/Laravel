@if(session()->has('success'))
      <div
            x-data="{show:true}" 
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"
            class="fixed bg-blue-500 rounded-xl text-white py-2 px-4 text-sm bottom-3 right-3">
        <p>{{ session('success') }}</p>
      </div>
@endif