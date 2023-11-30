<x-guest-layout>
    <x-auth-card>
        {{-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}

        <x-slot name="head">Registration</x-slot>

        <div class="px-6 py-4">

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('thanks') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-login id="name" type="text" name="name" :value="old('name')" placeholder="Username"
                        required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-login id="email" type="email" name="email" :value="old('email')" placeholder="Email"
                        required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-login id="password" type="password" name="password" required
                        autocomplete="current-password" placeholder="Password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-login id="password_confirmation" type="password" name="password_confirmation" required
                        placeholder="Password確認" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4">
                        {{ __('登録') }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
