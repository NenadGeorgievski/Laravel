@props(['category'])

<a href="/?category={{ $category->slug }}" class="px-3 py-1 rounded-full border border-blue-300 text-blue-300 text-xs uppercase font-semibold" style="font-size: 10px;">
    {{ $category->name }}
</a>