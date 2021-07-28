<div class="flex flex-col items-center min-h-screen pt-6 bg-transparent sm:justify-center sm:pt-0">
    <div class="w-full px-6 py-4 mt-6 overflow-hidden border-4 shadow-md bg-white/90 sm:max-w-md sm:rounded-lg border-amber-300/50">
        <div class="flex items-center justify-center py-6">
            {{ $logo }}
        </div>
        {{ $slot }}
    </div>
</div>
