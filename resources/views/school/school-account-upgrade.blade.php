<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-300 leading-tight">
            {{ __('Upgrade Account') }}
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
            <a href="{{ url('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
            <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
            Dashboard
            </a>
        </li>
    </ol>
</nav>

@if(session()->has('message'))
<div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <div>
      <span class="font-medium">Success!</span> {{ session()->get('message') }}
    </div>
  </div> 
@endif

            <div class="my-3">
                 <!--2 part grid-->
                 <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2">
                        <div>
                            <!--form--holder-->
                            <div class=" rounded shadow px-3 py-3 bg-white">
                                <!--profile form-->
                                    <div class="px-3 pb-3 mb-3">
                                    <h3 class="max-w-lg mb-3 pt-3 font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl md:mx-auto">
                                    Free Package
                                    </h3>
                                    <h1 class='text-green-500 text-2x1 text-4xl sm:text-4xl font-bold'>₦0</h1>
                                    <p> Per Month</p>
                                    <hr class="my-3">
                                    <p class='my-3 text-gra'>Learn more about the benefits  <a href="{{ url('pricing')}}" class='text-blue-600'>here</a></p>
                                    <form method="POST" action="{{ url('school-events') }}">
                                    @csrf
                                    <div class='items-center  mt-4'>
                                        <x-button class="w-full bg-green-500">
                                            {{ __('Current Package') }}
                                        </x-button>
                                    </div>
                                    </form>
                                    </div>
                                    </div>
                                <!--//profile form-->
                            </div>
                            <!--form--holder-->
                        <div>
                            <!--edit--holder--->
                            <div class="rounded shadow px-3 py-3 bg-white">
                                <!--scholarship data-->
                                <div class="px-3 pb-3 mb-3">
                                    <h3 class="max-w-lg mb-3 pt-3 font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl md:mx-auto">
                                    Premium Package
                                    </h3>
                                    <h1 class='text-green-500 text-2x1 text-4xl sm:text-4xl font-bold'>₦50,000</h1>
                                    <p> Per Month</p>
                                    <hr class="my-3">
                                    <p class='my-3 text-gra'>Learn more about this project <a href="{{ url('pricing')}}" class='text-blue-600'>here</a></p>
                                    <form method="POST" action="{{ url('school-events') }}">
                                    @csrf
                                    <div class='items-center  mt-4'>
                                        <x-button class="w-full">
                                            {{ __('Premium Package') }}
                                        </x-button>
                                    </div>
                                    </form>
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
    