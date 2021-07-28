@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-amber-400 text-base font-medium text-rose-700 bg-amber-50 focus:outline-none focus:text-rose-800 focus:bg-amber-100 focus:border-amber-700 transition'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-white hover:text-amber-300 hover:bg-amber-50 hover:border-amber-400 focus:outline-none focus:text-rose-800 focus:bg-amber-50 focus:border-amber-400 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
