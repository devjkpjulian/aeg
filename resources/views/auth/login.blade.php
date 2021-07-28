<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" placeholder="{{ __('Email') }}" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password" />
            </div>

            <div class="flex flex-col items-center justify-center w-full mt-4">
                <x-jet-button class="w-full">
                    {{ __('Log in') }}
                </x-jet-button>
                @if (Route::has('password.request'))
                    <a class="py-2 text-sm text-center text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
