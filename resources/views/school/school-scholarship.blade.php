<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-300 leading-tight">
            {{ __('Scholarship') }}
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
        <a href="{{ url('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
        Dashboard
        </a>
    </li>

    <li class="inline-flex items-center">
        <a href="{{ url("school-all-scholarship") }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
    <svg class="mr-2 w-4 h-4 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        See all Scholarships
        </a>
    </li>

    <li class="inline-flex items-center">
        <a href="{{ url("school-all-nominations") }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
    <svg class="mr-2 w-4 h-4 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        All Nominations
        </a>
    </li>
</ol>
</nav>
            <!--bread crumb-->
            <!--scholarship table-->

            <!--scholarship table-->
            
            <!--blog table-->
            <div class="my-3">
                 <!--2 part grid-->
                 <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2">
                        <div>
                            <!--form--holder-->
                            <div class=" rounded shadow px-3 py-3 bg-white">
                                <!--profile form-->
                                <div class="px-3 pb-3 mb-3">
                                    <h3 class="max-w-lg mb-3 pt-3 font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl md:mx-auto">
                                     Create Scholarship Offer
                                    </h3>
                                    <hr class="my-3">

                                    @if(session()->has('message'))
                                    <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                                        <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                        <div>
                                            <span class="font-medium">Success!</span> {{ session()->get('message') }}
                                        </div>
                                        </div> 
                                    @endif

                                    <form method="POST" action="{{ url('school-scholarship')}}">
                                        @csrf
                                        <!-- Amount -->
                                        <div class="mt-4">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
                                            <input type="text" value="{{$editable_data[0]->title ?? ''}}"  autocomplete="new-password" name="title" id="password" placeholder="Enter a Title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                        </div>

                                        <div class="mt-4">
                                            <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Location</label>
                                            <input type="text" value="{{$editable_data[0]->location ?? ''}}"  autocomplete="" name="location" id="" placeholder="E.g. Ikeja, Lagos" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                        </div>
                            
                                        <div class="mt-4">
                                            <label for="grade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Grade</label>
                                            <input type="text"  value="{{$editable_data[0]->grade ?? ''}}"  name="grade" id="grade" placeholder="E.g. JSS3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                        </div>

                                        <div class="mt-4">
                                            <input type="hidden"  value="{{ Auth::user()->school_name ?? ''}}"  name="school_name" id="grade" placeholder="E.g. JSS3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                        </div>

                                        <div class="mt-4">
                                            <label for="credit-amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Scholarship Details</label>
                                        <textarea
                                            name="scholarship_details"
                                            class=" form-control block w-full px-3 py-1.5 text-base font-normaltext-gray-700 bg-white bg-clip-padding
                                            border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                            "
                                            id="exampleFormControlTextarea1"
                                            rows="3"
                                            >{{$editable_data[0]->scholarship_details ?? ''}}</textarea>
                                        </div>

                                        <div class="mt-4">
                                            <label for="credit-amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cash Reward</label>
                                            <input type="number" value="{{$editable_data[0]->commission ?? ''}}"  autocomplete="new-password" name="commission" id="password" placeholder="E.g. 5000" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">
                                               Top up your account wallet to enable cash rewards for affiliates participants. 
                                            </div>
                                        </div>
                            
                                        @if($edit_table)
                                        <input type="hidden" name="edit_scholarship_id" value="{{$editable_data[0]->id}}">
                                            <div class='items-center  mt-4'>
                                                <x-button class="w-full">
                                                    {{ __('Edit Scholarship') }}
                                                </x-button>
                                            </div>
                                        @else
                                            <div class='items-center  mt-4'>
                                                <x-button class="w-full">
                                                    {{ __('Create Scholarship') }}
                                                </x-button>
                                            </div>
                                        @endif

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
                                         Scholarship Data
                                        </h3>
                                        <hr class="my-3">


                                        <h1 class="sm:text-4xl font-bold">{{ $count_scholarship_post }}</h1>
                                        <p class="text-sm text-gray-500">Total Number of Scholarships Created</p>
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
    