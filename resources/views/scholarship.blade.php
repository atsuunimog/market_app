<x-guest-layout>   

  
      <div class="px-4 pb-3 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
          <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-6">
            <div>
              <p class="inline-block px-3 py-px my-5 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
               SCHOOL SCHOLARSHIPS
              </p>
            </div>
            <h2 class="max-w-lg font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
           All Scholarships
            </h2>
          </div>

  
        <div class="container mx-auto hidden">
           <div class=" p-3  md:w-1/2 mx-auto mb-3">
            <!--search form-->
            <form class="flex flex-col items-center w-full md:mt-0 md:flex-row">
                <x-input id="email" placeholder='Enter School Name' class="block  w-full" type="email" name="email" :value="old('email')" required autofocus />
                <button
                  type="submit"
                  class="animate__animated animate__rubberBand inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
                >
                  Search
                </button>
              </form>
              <!--//search form-->
          </div>
        </div>
  
  <div id="alert-border-4" class="flex p-4  mx-auto bg-yellow-100 md:w-1/2 w-full border-t-4 border-yellow-500 dark:bg-yellow-200" role="alert">
    <svg class="flex-shrink-0 w-5 h-5 text-yellow-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <div class="ml-3 text-sm font-medium text-yellow-700">
      Become an affiliate and earn cash rewards <a href="{{ url('help')}}" class="font-semibold underline hover:text-yellow-800">How it works</a>. 
    </div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-100 dark:bg-yellow-200 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 dark:hover:bg-yellow-300 inline-flex h-8 w-8" data-collapse-toggle="alert-border-4" aria-label="Close">
      <span class="sr-only">Dismiss</span>
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  </div>
  {{-- <div class="container mx-auto">
    <div class=" md:w-1/2 mx-auto">
      <a href='{{ url()->previous() }}' type="button"
        class="mx-auto rounded text-xs uppercase text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium  py-3 px-5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">
        <i class="ion-android-arrow-back"></i>
        Go back</a>
       </div>
    </div>
  </div> --}}
  
  @foreach ($scholarship_data as $data)
    <!--Image Carousel-->
      <div class="container mx-auto">
          <div class="md:w-1/2 mx-auto mb-3 overflow-hidden border rounded py-4 px-3">
            <p class='font-bold text-red-800 text-sm mb-1 uppercase'>{{ $data->school_name }}</p>
                <p class=" font-bold text-xl pb-1 truncate ">{{ $data->title }}</p>
                <div class='flex my-1 align-middle m-0 p-0'>
                  <p class="text-gray-800 p-0 mr-3"><span class='font-bold'>Location:</span> {{ $data->location }}</p>
                  <p class="text-gray-800 p-0 mr-3"><span class='font-bold'>Class:</span> {{ $data->grade }}</p>
                  <p class="text-gray-800 p-0 m-0"><span class='font-bold'>Date:</span> {{ Carbon\Carbon::parse($data->created_at)->format('d-m-y')}}</p>
                </div>

                <p class="mb-3 font-normal truncate w-100">
                  {{ $data->scholarship_details }}
                </p>

                <a href='{{ url('single-scholarship', ['id' => $data->id])}}' type="button"
                  class="mx-auto text-xs uppercase float-right rounded inline-block text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium  py-3 px-5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">
                 Apply
                </a>
                 </div>
          </div>
    </div>
      <!--Image Carousel-->
  
   @endforeach
  <div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
    <div class="max-w-xl md:mx-auto sm:text-center py-5">
    <div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
    {{$scholarship_data->links()}}
  </div>
  </div>
  </div>
  </x-guest-layout>
      
      