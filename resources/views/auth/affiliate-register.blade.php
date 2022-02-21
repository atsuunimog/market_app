<x-guest-layout>
    <div class="relative">
        <img src="https://images.pexels.com/photos/955402/pexels-photo-955402.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" class="absolute inset-0 object-cover w-full h-full" alt="" />
        <div class="relative bg-opacity-75 bg-black">
          <svg class="absolute inset-x-0 bottom-0 text-white" viewBox="0 0 1160 163">
            <path
              fill="currentColor"
              d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z"
            ></path>
          </svg>
          <div class="relative px-4 py-16 mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between xl:flex-row">
              <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                 Join the<br class="hidden md:block" />
                 School Affiliate Programme to earn cash rewards
                </h2>
                <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.
                </p>
                <a href="{{ url('about') }}"
                type="submit"
                class="inline-flex mx-auto  mt-3 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
              >
               Learn more
               <i class="icon ion-android-arrow-forward ml-3"></i>
              </a>
              </div>
    
              <!--form-->
              <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <h5 class="mb-3 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
                  Affiliate  Sign up
                </h5>
                <form method="POST" action="{{ route('affiliate-register') }}">
                    @csrf
                    <div class="grid grid-cols-2 gap-2">
                        <!-- Name -->
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
                            <input type="text" name="username" id="username" :value="old('username')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="username" required>
                        </div>
                        <!-- Email Address -->
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                            <input type="email" name="email" id="email"  :value="old('email')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                        </div>
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
                        <input type="password"  autocomplete="new-password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
        
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm password</label>
                        <input type="password"   name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
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
                </div>
              <!--form-->
            </div>
          </div>
        </div>
      </div>
    </x-guest-layout>
    