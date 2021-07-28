<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center px-4 py-2 bg-rose-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-rose-700 active:bg-rose-900 focus:outline-none focus:border-rose-900 focus:ring focus:ring-rose-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
