<x-agent-guest-layout>
    <x-auth-card>

        <x-slot name="head">Login</x-slot>

        <div class="px-6 py-4">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('agent.login_store') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-login id="email" type="email" name="email" :value="old('email')" placeholder="Email"
                        required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-login id="password" type="password" name="password" required
                        autocomplete="current-password" placeholder="Password" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-3">
                        {{ __('ログイン') }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-auth-card>
</x-agent-guest-layout>
