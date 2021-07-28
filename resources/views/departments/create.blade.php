<x-app-layout>
    <div class="py-12">
        <div class="max-w-md mx-auto border-4 shadow-xl bg-white/90 border-amber-300/50 sm:rounded-lg sm:p-6 lg:p-6">
                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('departments.store') }}">
                    @csrf

                    <div>
                        <x-jet-label for="name" value="{{ __('Department Name') }}" />
                        <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="dean_id" value="{{ __('Assign Dean') }}" />
                        <select id="dean_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-amber-300 focus:ring focus:ring-amber-300/50" name="dean_id" required autofocus>
                            @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="w-full">
                            CREATE DEPARTMENT
                        </x-jet-button>
                    </div>
                </form>
        </div>
    </div>
</x-app-layout>