@if(session()->has('success'))
      <div
            x-data="{show:true}" 
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"
            class="fixed-bottom rounded alert alert-primary px-2 py-2 text-sm bottom-3 right-3">
        <p>{{ session('success') }}</p>
      </div>
@endif