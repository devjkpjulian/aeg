<x-app-layout>
    <div class="py-12">
        <div class="max-w-md mx-auto border-4 shadow-xl bg-white/90 border-amber-300/50 sm:rounded-lg sm:p-6 lg:p-6">
                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('sge_types.store') }}">
                    @csrf

                    <div>
                        <x-jet-label for="name" value="{{ __('SGE Type') }}" />
                        <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="w-full">
                            CREATE SGE Type
                        </x-jet-button>
                    </div>
                </form>
        </div>
    </div>
</x-app-layout>