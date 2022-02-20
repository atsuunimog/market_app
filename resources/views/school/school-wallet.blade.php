<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-300 leading-tight">
            {{ __('Wallet') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-5">
    <div class="grid sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-2">
        <div>
            <div class=" my-3">
                <!--aside -->
                @include("default_layout.school_side_menu")
                <!--aside -->
            </div>
        </div>
        <div class="sm:col-span-3 md:col-span-3 lg:col-span-3">

            <!--wallet banner-->
            <div class="p-8 bg-gray-900 rounded mt-3">
                <div class="mb-4 text-center">
                  <p class="text-xl font-medium tracking-wide text-white">
                   Balance
                  </p>
                  <div class="flex items-center justify-center">
                    <p class="mr-2 text-5xl font-semibold text-white lg:text-6xl">
                      ₦0.00
                    </p>
                    {{-- <p class="text-lg text-gray-500">/ month</p> --}}
                  </div>
                </div>
            </div>
            <!---wallert banner-->
        

            <div class="my-3">
                 <!--2 part grid-->
                 <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2">
                        <div>
                            <!--form--holder-->
                            <div class=" rounded shadow px-3 py-3 bg-white">
                                <!--profile form-->
                                <div class="px-3 pb-3 mb-3">
                                    <h3 class="max-w-lg mb-3 pt-3 font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl md:mx-auto">
                                    Credit Balance
                                    </h3>
                                    <hr class="my-3">
                                    <form method="POST" action="">
                                        @csrf
                                        <!-- Amount -->
                                        <div class="mt-4">
                                            <label for="credit-amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Credit Balance</label>
                                            <input type="number"  autocomplete="new-password" name="credit-amount" id="password" placeholder="e.g. 50,000" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">
                                               Top up your account wallet to enable cash rewards for affiliates participants
                                            </div>
                                        </div>
                            
                                        <div class='items-center  mt-4'>
                                            <x-button class="w-full">
                                                {{ __('Credit Account') }}
                                            </x-button>
                                        </div>
                                    </form>
                                </div>
                                <!--//profile form-->
                            </div>
                            <!--form--holder-->
                        </div>
                        <div>
                            <!--edit--holder--->
                            <div class="rounded shadow px-3 py-3 bg-white">
                                <!--bio data-->
                                <div class="px-3">
                                    <h3 class="max-w-lg mb-3 pt-3 font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl md:mx-auto">
                                      Transaction History
                                        </h3>
                                        <hr class="my-3">
                                    
                                    
                                </div>
                                <!--bio data-->
                            </div>
                            <!--edit--holder-->
                        </div>
                 </div>
                 <!--2 part grid-->
            </div>
        </div>
      </div>
    </div>
   
    @include("default_layout/footer")
    </x-app-layout>
    