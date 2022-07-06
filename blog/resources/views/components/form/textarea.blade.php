@props(['name'])

<x-form.field>

    <x-form.label name="{{ $name }}" />

    <textarea name="{{ $name }}" id="{{ $name }}" required class="p-2 w-full border border-gray-200 rounded">{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
   
</x-form.field>   