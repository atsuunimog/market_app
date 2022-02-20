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

        <!--authentication alert-->
        <div id="alert-border-2" class="flex p-4 bg-red-100 border-t-4 mt-3 border-red-500 dark:bg-red-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-sm font-medium text-red-700">
            <a href="#" class="font-semibold hover:text-red-800">Confirm Account: </a>A confirmation link has been sent to your email
            </div>
        </div>
        <!--authentication alert-->


         <!--Image banner-->
      <div class="grid md:grid-cols-4 gap-3 sm:grid-cols-1 ">
        <div class="md:col-span-1 sm:col-span-1 rounded">
            <div class="py-3 text-center">
                <!--image-->
                <div class="grid text-center bg-white rounded h-56 sm:h-40 shadow content-center">
                    <img class="object-cover block mx-auto w-20 h-20 border rounded-full shadow" 
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrzTtyzDJJxUkJeZMzhSmk0twx8K2xODwYpA&usqp=CAU" alt="Person" />
                </div>
                <!--image-->
            </div>
        </div>
        <div class="md:col-span-3 sm:col-span-1 rounded">
          <div class="py-3">
              <!--banner-image-->
              <img class="object-cover w-full h-56 sm:h-40 rounded" src="https://images.pexels.com/photos/3184419/pexels-photo-3184419.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
              <!--banner-image-->
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
                    Profile Visits
                </div>
                <!--//analytics info-->
            </div>

            <div>
                <!--analytics info-->
                <div class="shadow border rounded bg-white px-3 py-3 text-center h-40">
                    <h1 class="max-w-lg mb-3 pt-3 font-sans text-5xl font-bold leading-none tracking-tight text-gray-900 sm:text-5xl md:mx-auto">
                        0
                    </h1>
                    Admission Request
                </div>
                <!--//analytics info-->
            </div>

            <div>
                 <!--analytics info-->
                <div class="shadow border rounded bg-white px-3 py-3 text-center h-40">
                    <h1 class="max-w-lg mb-3 pt-3 font-sans text-5xl font-bold leading-none tracking-tight text-gray-900 sm:text-5xl md:mx-auto">
                        0
                    </h1>
                    Active Scholarships
                </div>
                <!--//analytics info-->
            </div>

            <div>
                    <!--analytics info-->
                    <div class="shadow border rounded bg-white px-3 py-3 text-center h-40">
                    <h1 class="max-w-lg mb-3 pt-3 font-sans text-5xl font-bold leading-none tracking-tight text-gray-900 sm:text-5xl md:mx-auto">
                        0
                    </h1>
                    Active Affiliates
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
    