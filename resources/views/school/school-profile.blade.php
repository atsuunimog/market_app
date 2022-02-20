<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-300 leading-tight">
            {{ __('Profile') }}
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

            <nav class="flex bg-white mb-3 py-3 mt-3 px-3 rounded shadow" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Profile
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
                                
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <!--profile form-->
                                <form method="POST" action="{{ url('school-profile') }}" class="px-3">
                                    @csrf
                                    <h3 class="max-w-lg mb-3 pt-3 font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl md:mx-auto">
                                    Update Profile
                                    </h3>

                                    <hr class="mb-3">

                                    <div class="flex">
                                        <div class="pr-5">
                                            <!--image upload-->
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload Profile Image </label>
                                            <input name="profileUploadImage" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A profile picture is useful to confirm your are logged into your account</div>
                                            <!--//image upload-->
                                        </div>
                                        <div class="">
                                            <!--image upload-->
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload Banner Image </label>
                                            <input name="bannerUploadImage" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A banner picture is useful to confirm your are logged into your account</div>
                                            <!--//image upload-->
                                        </div>
                                    </div>

                                    <div class="my-6">
                                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">School Name</label>
                                        <input type="text" name="school_name" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>

                                    <div class="my-6">
                                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">School Address</label>
                                        <input type="text" name="school_address" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    
                                    <div class="my-6">
                                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone No</label>
                                        <input type="text" name="phone_number" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    

                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">About School</label>
                                    <textarea id="message" rows="4" name="school_bio"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 
                                    focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    placeholder="About the school..."></textarea>
                                    
                                    <button
                                    type="submit"
                                    class="my-5 animate__animated animate__rubberBand inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
                                    >
                                    Update Information
                                    </button>
                                </form>
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
                                    Profile Data
                                    </h3>

                                    <hr class="my-3">

                                    <p class='font-bold my-3'>XYZ Comprehensive High School</p>

                                    <p class="mb-3 pb-3">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.
                                    </p>
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
    