<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-300 leading-tight">
            {{ __('Dashboard') }}
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

        @if(Auth::user()->email_verified_at == null)
        <!--authentication alert-->
        <div id="alert-border-2" class="hidden flex p-4 mt-3 border-t-4 border-red-500 bg-yellow-100  dark:bg-yellow-200" role="alert">
            <svg class="inline-block flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 inline-block text-sm font-medium text-red-700">
                <span class="font-semibold hover:text-red-800">A confirmation mail has been sent to you
                <a href='' class="text-blue-700 underline ml-1">{{__('Resend link')}}</a>
                </span>
            </div>
        </div>
        <!--authentication alert-->
        @endif

       
        <nav class="flex bg-white py-3 px-3 mt-3 rounded shadow" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{url('dashboard')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Dashboard
                    </a>
                </li>
                <li class="inline-flex items-center">
                    <a href="{{url('school-front', ['username' => Auth::user()->username])}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="mr-2 w-4 h-4 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Public Profile
                    </a>
                </li>
            </ol>
        </nav>

      <!--Image banner-->
      <div class="grid md:grid-cols-1 sm:grid-cols-1">
        <div class="md:col-span-1 sm:col-span-1 rounded">
          <div class="py-3">
              <div class='bg-blue-500 h-60 sm:h-60 rounded shadow relative'>
              <!--banner-image-->
              <img class="object-cover w-full h-60 sm:h-60 rounded" 
              src="{{ isset($school_data[0]->banner_img)? asset('storage/'.$school_data[0]->banner_img) : 'storage/banner.jpg'  }}" alt="Profile_banner" />
              <!--banner-image-->
              <!--absolute content-->
              <div class='absolute bottom-1 bg-black text-white  px-5 py-4 opacity-80' style='left:0%'>
                 <h1 class='m-0 p-0'>{{ Auth::user()->school_name }}</h1>
              </div>
              <!--absolute content-->
              </div>
          </div>
        </div>
    </div>
    <!--Image banner-->

        <div class="grid sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-3">
            <div>
                <!--analytics info-->
                <div class="shadow border rounded bg-white px-3 py-3 text-center h-40">
                    <h1 class="max-w-lg mb-3 pt-3 font-sans text-5xl font-bold leading-none tracking-tight text-gray-900 sm:text-5xl md:mx-auto">
                        0
                    </h1>
                   Visitors
                   <p class='mb-3  text-sm text-gray-500'>Today's visitors</p>
                </div>
                <!--//analytics info-->
            </div>

            <div>
                <!--analytics info-->
                <div class="shadow border rounded bg-white px-3 py-3 text-center h-40">
                    <h1 class="max-w-lg mb-3 pt-3 font-sans text-5xl font-bold leading-none tracking-tight text-gray-900 sm:text-5xl md:mx-auto">
                        0
                    </h1>
                    Admission Requests
                    <p class='mb-3  text-sm text-gray-500'>Today admission request</p>
                </div>
                <!--//analytics info-->
            </div>

            <div>
                 <!--analytics info-->
                <div class="shadow border rounded bg-white px-3 py-3 text-center h-40">
                    <h1 class="max-w-lg mb-3 pt-3 font-sans text-5xl font-bold leading-none tracking-tight text-gray-900 sm:text-5xl md:mx-auto">
                    0
                    </h1>
                    Scholarship Post
                    <p class='mb-3  text-sm text-gray-500'>All Scholarship posts</p>
                </div>
                <!--//analytics info-->
            </div>

            <div>
                    <!--analytics info-->
                    <div class="shadow border rounded bg-white px-3 py-3 text-center h-40">
                    <h1 class="max-w-lg mb-3 pt-3 font-sans text-5xl font-bold leading-none tracking-tight text-gray-900 sm:text-5xl md:mx-auto">
                        0
                    </h1>
                   Blogs
                   <p class='mb-3  text-sm text-gray-500'>All Blog posts</p>
                </div>
                <!--//analytics info-->
            </div>
        </div>

            <div class="my-3 hidden">
                 <!--2 part grid-->
                 <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2">
                        <div>
                            <!--form--holder-->
                            <div class=" rounded shadow px-3 py-3 bg-white">
                                <!--profile form-->
                                Analytics 1
                                <!--//profile form-->
                            </div>
                            <!--form--holder-->
                        </div>
                        <div>
                            <!--edit--holder--->
                            <div class="rounded shadow px-3 py-3 bg-white">
                                <!--bio data-->
                               Analytics 2
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
    