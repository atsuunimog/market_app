<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-300 leading-tight">
            {{ __('Achivements') }}
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

            <div class="my-3">
                 <!--2 part grid-->
                 <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2">
                        <div>
                            <!--form--holder-->
                            <div class=" rounded shadow px-3 py-3 bg-white">
                                <!--profile form-->
                                <div class="px-3 pb-3 mb-3">
                                    <h3 class="max-w-lg mb-3 pt-3 font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl md:mx-auto">
                                    Update Achievements
                                    </h3>
                                    <hr class="my-3">
                                    <form method="POST" action="">
                                        @csrf
                                        <!-- Amount -->
                                        <div class="mt-4">
                                            <label for="credit-amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
                                            <input type="text"  autocomplete="new-password" name="credit-amount" id="password" placeholder="Enter a Title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                        </div>

                                        <div class="mt-4">
                                            <label for="credit-amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">School Branch</label>
                                            <input type="text"  autocomplete="" name="credit-amount" id="" placeholder="Enter School Branch" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                        </div>
                            
                                        <div class="mt-4">
                                            <label for="credit-amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Grade</label>
                                            <input type="number"  autocomplete="new-password" name="credit-amount" id="password" placeholder="Enter a Grade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                        </div>

                                        <div class="mt-4">
                                            <label for="credit-amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Comission Fee %</label>
                                            <input type="number"  autocomplete="new-password" name="credit-amount" id="password" placeholder="Enter Commission Fee" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">
                                               Top up your account wallet to enable cash rewards for affiliates participants
                                            </div>
                                        </div>
                            
                            
                                        <div class='items-center  mt-4'>
                                            <x-button class="w-full">
                                                {{ __('Create Scholarship') }}
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
                                <!--scholarship data-->
                                <div class="px-3">
                                    <div class="px-3 pb-3 mb-3">
                                        <h3 class="max-w-lg mb-3 pt-3 font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl md:mx-auto">
                                         Achievement Details
                                        </h3>
                                        <hr class="my-3">

                                    </div>
                                </div>
                                <!--scholarship data-->
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
    