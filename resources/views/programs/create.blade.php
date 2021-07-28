<x-app-layout>
    <div class="py-12">
        <div class="max-w-md mx-auto border-4 shadow-xl bg-white/90 border-amber-300/50 sm:rounded-lg sm:p-6 lg:p-6">
                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('programs.store') }}">
                    @csrf

                    <div>
                        <x-jet-label for="department_id" value="{{ __('Department') }}" />
                        <select id="department_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-amber-300 focus:ring focus:ring-amber-300/50" name="department_id" required autofocus>
                            @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="name" value="{{ __('Program Name') }}" />
                        <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="abbreviation" value="{{ __('Abbreviation') }}" />
                        <x-jet-input id="abbreviation" class="block w-full mt-1" type="text" name="abbreviation" required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="w-full">
                            CREATE PROGRAM
                        </x-jet-button>
                    </div>
                </form>
        </div>
    </div>
</x-app-layout>