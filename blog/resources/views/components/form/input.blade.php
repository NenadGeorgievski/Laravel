@props(['name'])

<x-form.field>

    <x-form.label name="{{ $name }}" />
    
    <input 
       
        name="{{ $name }}" id="{{ $name }}" 
  
        class="p-2 w-full border border-gray-200 rounded" 
        
        {{ $attributes(['value' => old($name)]) }}
    >

   <x-form.error name="{{ $name }}" />

</x-form.field>   