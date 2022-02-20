<x-guest-layout>
    <div class="my-20 px-3">
    <div class="mx-auto px-10 py-5 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
       
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="space-y-6" method="post" action="{{ route('affiliate-login') }}">
            <h5 class="mb-3 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
          Affiliate  Login
            </h5>
        <div>
        @csrf
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
        <input type="email" name="email" id="email" :value="old('email')" required autofocus  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required="">
        </div>
        <div>
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
        <input type="password" name="password" id="password" placeholder="••••••••"  required autocomplete="current-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
        </div>
        <div class="flex items-start">
        <div class="flex items-start">
        <div class="flex items-center h-5">
        <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
        </div>
        <div class="ml-3 text-sm">
        <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember me</label>
        </div>
        </div>
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="ml-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
        @endif
        </div>

        <div class='items-center  mt-4'>
            <x-button class="w-full">
                {{ __('Log in') }}
            </x-button>
        </div>

        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
        Not registered? <a href="{{ route('register') }}" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
        </div>
        </form>
        </div>
    </div>
</x-guest-layout>


