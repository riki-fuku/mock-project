<x-guest-layout>
    <x-auth-card>

        <x-slot name="head">Login</x-slot>

        <div class="px-6 py-4">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    {{-- <x-label for="email" :value="__('Email')" /> --}}

                    <x-input-login id="email" type="email" name="email" :value="old('email')" placeholder="Email"
                        required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    {{-- <x-label for="password" :value="__('Password')" /> --}}

                    <x-input-login id="password" type="password" name="password" required
                        autocomplete="current-password" placeholder="Password" />
                </div>

                {{-- <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div> --}}

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-3">
                        {{ __('ログイン') }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
