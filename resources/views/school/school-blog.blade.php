<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-300 leading-tight">
            {{ __('Blog') }}
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

            <!--bread crumb-->

<nav class="flex bg-white mb-3 py-3 mt-3 px-3 rounded shadow" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                Home
            </a>
        </li>
    </ol>
    </nav>


            <div class="my-3">
                 <!--2 part grid-->
                 <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2">
                        <div>
                            <!--form--holder-->
                            <div class=" rounded shadow px-3 py-3 bg-white">
                                <!--profile form-->
                                <div class="px-3 pb-3 mb-3">
                                    <h3 class="max-w-lg mb-3 pt-3 font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl md:mx-auto">
                                    Create Blog
                                    </h3>
                                    <hr class="my-3">
                                    <form method="POST" action="">
                                        @csrf
                                        <div class="w-full">
                                            <!--image upload-->
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload Blog Image </label>
                                            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Add a blog image for every post</div>
                                            <!--//image upload-->
                                        </div>

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
                                        Blog Details
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
    