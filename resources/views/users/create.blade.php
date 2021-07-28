<x-app-layout>
    <div class="py-12">
        <div class="max-w-md mx-auto border-4 shadow-xl bg-white/90 border-amber-300/50 sm:rounded-lg sm:p-6 lg:p-6">
                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('users.store') }}">
                    @csrf

                    <div>
                        <x-jet-label for="role" value="{{ __('User Role') }}" />
                        <select id="role" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-amber-300 focus:ring focus:ring-amber-300/50" name="role" required autofocus>
                            <option value="0">Admin</option>
                            <option value="1">ICEP Director</option>
                            <option value="2">ILRAD Director</option>
                            <option value="3">Dean</option>
                            <option value="4">Staff</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="w-full">
                            CREATE USER
                        </x-jet-button>
                    </div>
                </form>
        </div>
    </div>
</x-app-layout>