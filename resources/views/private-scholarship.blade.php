<x-guest-layout>   
  <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
    <div class="max-w-xl md:mx-auto sm:text-center pt-5 pb-3">
        <img class="object-cover shadow overflow-hidden rounded-full mx-auto  w-20 h-20" 
        src="{{isset($user_data[0]->logo_img)?asset('storage/'.$user_data[0]->logo_img) : asset('storage/school_logo.png')  }}" 
        alt="school-logo" />
    </div>
  </div>

    <div class="px-4 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
              SCHOLARSHIPS
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
           {{$user_data[0]->school_name}}
          </h2>
         
        </div>

<div id="alert-border-4" class="flex p-4 mb-4 mx-auto bg-yellow-100 md:w-1/2 w-full border-t-4 border-yellow-500 dark:bg-yellow-200" role="alert">
  <svg class="flex-shrink-0 w-5 h-5 text-yellow-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <div class="ml-3 text-sm font-medium text-yellow-700">
    Become an affiliate and earn cash rewards <a href="{{ url('help')}}" class="font-semibold underline hover:text-yellow-800">How it works</a>. 
  </div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-100 dark:bg-yellow-200 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 dark:hover:bg-yellow-300 inline-flex h-8 w-8" data-collapse-toggle="alert-border-4" aria-label="Close">
    <span class="sr-only">Dismiss</span>
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </button>
</div>

@foreach ($scholarship_data as $data)
  
  <!--Image Carousel-->
    <div class="container mx-auto">
      <div class="md:w-1/2 mx-auto mb-3 py-4">


          <div class="">
            <div class="">
            <img src="data:image/png;base64,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"/>
            </div>

            <div class=''>
            <p class='font-bold text-blue-800 text-sm mb-1'>
              {{ $data->school_name }}
            </p>
            <p class=" font-bold text-xl pb-1 truncate ">{{ $data->title }}</p>
            <div class='flex my-1 align-middle m-0 p-0 text-sm'>
              <p class="text-gray-800 p-0 mr-3"><span class='font-bold'>Location:</span> {{ $data->location }}</p>
              <p class="text-gray-800 p-0 mr-3"><span class='font-bold'>Class:</span> {{ $data->grade }}</p>
              <p class="text-gray-800 p-0 m-0"><span class='font-bold'>Date:</span> {{ Carbon\Carbon::parse($data->created_at)->format('d-m-y')}}</p>
            </div>
              <p class="mb-3 font-normal truncate w-100">
                {{ $data->scholarship_details }}
              </p>
            </div>
          </div>

            <a href='{{ url('single-scholarship', ['id' => $data->id])}}' type="button"
              class="mx-auto text-xs uppercase float-right rounded inline-block text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium  py-3 px-5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">
             Apply
            </a>
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
    
    