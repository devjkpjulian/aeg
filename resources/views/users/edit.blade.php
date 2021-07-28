<x-app-layout>
    <div class="py-12">
        <div class="max-w-md p-6 mx-auto border-4 shadow-xl bg-white/90 border-amber-300/50 sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('users.update',$user->id) }}">
                @method('patch')
                @csrf

                <div>
                    <x-jet-label for="role" value="{{ __('User Role') }}" />
                    <select id="role" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-amber-300 focus:ring focus:ring-amber-300/50" name="role" required autofocus>
                        <option value="0" {{ $user->role == 0 ? 'selected' : '' }}>Admin</option>
                        <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>ICEP Director</option>
                        <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>ILRAD Director</option>
                        <option value="3" {{ $user->role == 3 ? 'selected' : '' }}>Dean</option>
                        <option value="4" {{ $user->role == 4 ? 'selected' : '' }}>Staff</option>
                    </select>
                </div>

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" value="{{ $user->name }}" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" value="{{ $user->email }}" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" value="{{ $user->password }}" required autocomplete="new-password" />
                </div>

                <div class="flex items-center justify-center mt-4">
                    <x-jet-button class="w-full">
                        UPDATE USER
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>