@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-white text-sm font-extrabold leading-5 text-amber-300 hover:text-white focus:outline-none focus:border-amber-700 transition uppercase'
            : 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-white hover:text-amber-300 focus:outline-none focus:text-amber-300 focus:border-amber-300 transition uppercase';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
