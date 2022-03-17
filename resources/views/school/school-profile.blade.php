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
                        <a href="{{url('dashboard')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Dashboard
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

                                @if(session()->has('message'))
                                <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                    <div>
                                      <span class="font-medium">Success!</span> {{ session()->get('message') }}
                                    </div>
                                  </div> 
                                @endif


                                <!--profile form-->
                                <form method="POST" action="{{ url('school-profile') }}" class="px-3" enctype="multipart/form-data">
                                    <h3 class="max-w-lg mb-3 pt-3 font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl md:mx-auto">
                                    Update Profile
                                    </h3>

                                    <hr class="mb-3">

                                    @csrf
                                    <div class="flex gap-2">
                                        <div class="">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload School Logo</label>
                                            <input name="logo_img"  class="block w-full text-sm text-gray-900 bg-gray-50  border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Add your school logo</div>
                                        </div>
                                        <div class="">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload Banner Image</label>
                                            <input name="banner_img" class="block w-full text-sm text-gray-900 bg-gray-50  border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Upload your school banner</div>
                                        </div>
                                    </div>

                                    <div class="my-6">
                                        <label for="school_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">School Name</label>
                                        <input type="text" value="{{ isset($school_data[0]->school_name)? $school_data[0]->school_name : Auth::user()->school_name  }}" placeholder="Enter school name!" name="school_name" id="school_name" class="text-color:blu bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>

                                    <div class="my-6">
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                                        <input type="email" value="{{ isset($school_data[0]->school_email)? $school_data[0]->school_email : Auth::user()->email }}" placeholder="Enter school Address" name="school_email" id="school_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Your school email will be made public</div>
                                    </div>                              

                                    <div class="my-6">
                                        <label for="school_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">School Address</label>
                                        <input type="text" value="{{ isset($school_data[0]->school_address) ? $school_data[0]->school_address : old('school_address')  }}" placeholder="Enter school Address" name="school_address" id="school_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    
                                    <div class="my-6">
                                        <label for="phone_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone No</label>
                                        <input type="text" value="{{ isset($school_data[0]->phone_no) ? $school_data[0]->phone_no : old('phone_no')  }}" placeholder="080 XXX XXX" name="phone_no" id="phone_no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>

                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">About School</label>
                                    <textarea id="message" rows="4" name="about_school"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 
                                    focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    placeholder="About the school...">{{ isset($school_data[0]->about_school) ? $school_data[0]->about_school : old('about_school')  }}</textarea>
                                    
                                    <div class="">
                                        <input name='edit_img_logo' type="hidden" value="{{ isset($school_data[0]->logo_img) ? $school_data[0]->logo_img : ''  }}" placeholder="080 XXX XXX" name="phone_no" id="phone_no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <input name='edit_img_banner' type="hidden" value="{{ isset($school_data[0]->banner_img) ? $school_data[0]->banner_img : ''  }}" placeholder="080 XXX XXX" name="phone_no" id="phone_no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>

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
                                        {{ isset($school_data[0]->school_name)? $school_data[0]->school_name : Auth::user()->school_name  }}
                                    </h3>

                                    {{ Auth::user()->email }}
                                    <hr class="my-3">
                                    <p class='font-bold mt-3'>Email</p>
                                    <p class='text-gray-500'>  {{ isset($school_data[0]->school_email)? $school_data[0]->school_email : Auth::user()->email }}</p>

                                    <p class='font-bold mt-3'>Address</p>
                                    <p class='text-gray-500'>{{$school_data[0]->school_address ?? '' }}</p>

                                    <p class='font-bold mt-3'>About Us</p>
                                    <p class='text-gray-500'>
                                    {{$school_data[0]->about_school  ?? '' }}
                                    </p>

                                    <p class='font-bold mt-3'>Phone Number</p>
                                    <p class='text-gray-500'>{{$school_data[0]->phone_no ?? '' }}</p>

                                    <p class='font-bold mt-3'>Last Updated</p>
                                    @if(isset($school_data[0]->updated_at))
                                     <p class='text-gray-500 mb-3'>{{ Carbon\Carbon::parse($school_data[0]->updated_at)->format('D, d, Y') ?? ''}}</p>
                                    @endif
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
    