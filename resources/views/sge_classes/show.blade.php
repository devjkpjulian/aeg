<x-app-layout>
    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-10">
            <div class="flex flex-col overflow-hidden border-4 shadow-xl bg-white/90 border-amber-300/50 sm:rounded-lg">
                @livewire('student-table', ['sge_class' => $sge_class])
            </div>
        </div>
    </div>
</x-app-layout>