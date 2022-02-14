<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="grid grid-cols-2 gap-2">
                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Username')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
                </div>
                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
            </div>

            <!-- Role -->
            <div class="mt-4">
                <x-label for="account-type" :value="__('Select Account Type')" class="mb-1"/>
                <select name='account_type' id="account-type" class="block flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm">
                    <option disabled selected>Select account type</option>
                    <option value="sch_acct">Register as School</option>
                    <option value="aff_acct">Register as Affiliate</option>
                </select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" class="block mt-1 w-full"
                    type="password"
                    name="password_confirmation" required />
            </div>

            <div class='items-center  mt-4'>
                <x-button class="w-full">
                    {{ __('Register') }}
                </x-button>
            </div>

            <div class="block mt-4">
                <a class="text-sm text-blue-600 hover:text-gray-900 font-semibold " href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
