<x-guest-layout>
    <x-auth-card>
        <div class="px-6 py-4">

            <div class="text-center font-bold text-lg mt-20 mb-10">会員登録ありがとうございます</div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-login id="email" type="hidden" name="email" :value="old('email')" placeholder="Email"
                        required autofocus value="{{ $email }}" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-login id="password" type="hidden" name="password" required
                        autocomplete="current-password" placeholder="Password" value="{{ $password }}" />
                </div>

                <div class="text-center">
                    <x-button class="mb-10">
                        {{ __('ログインする') }}
                    </x-button>
                </div>
            </form>

        </div>
    </x-auth-card>
</x-guest-layout>
