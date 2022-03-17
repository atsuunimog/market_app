<x-guest-layout>   

<div class="px-4 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">
<div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-6">
  <div>
    <p class="inline-block px-3 py-px my-5 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
      SCHOOL SCHOLARSHIP
    </p>
  </div>
  <h2 class="max-w-lg font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
    Apply for Scholarship
  </h2>
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

{{-- <div class="container mx-auto">
  <div class=" md:w-1/2 mx-auto">
    <a href='{{ url()->previous() }}' type="button"
      class="mx-auto rounded text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium  py-3 text-sm px-5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">
      <i class="ion-android-arrow-back"></i>
      Go back</a>
     </div>
  </div>
</div> --}}

<div class="container mx-auto">
    <div class=" py-5 px-3 md:w-1/2 mx-auto mb-3">
    <p class='font-bold text-red-800 text-sm mb-3 uppercase'>{{$single_scholar_data[0]->school_name}}</p>
    <h1 class='text-lg font-bold'>{{$single_scholar_data[0]->title}}</h2>
    <!--mini menu-->
    <div class='flex py-3'>
        <p class='mr-3'><strong>Location: </strong>  {{$single_scholar_data[0]->location}}</p>
        <p class='mr-3'><strong>Date: </strong> {{$single_scholar_data[0]->location}}</p>
        <p><strong>Class: </strong> {{$single_scholar_data[0]->grade}}</p>
    </div>
    <!--mini menu-->
    <p>{{$single_scholar_data[0]->scholarship_details}}</p>
    </div>
</div>

<div class="container mx-auto">
    <div class=" py-5 px-3 md:w-1/2 mx-auto mb-3">
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <!--nomination form-->
    @if(session()->has('message'))
    <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div>
          <span class="font-medium">Success!</span> {{ session()->get('message') }}
        </div>
      </div> 
    @endif

<h1 class='text-lg font-bold mb-3'>Nominate Your Ward or Any Candidate</h2>

  <div id="alert-border-4" class="flex p-4 mb-4 bg-yellow-100 border-t-4 border-yellow-500 dark:bg-yellow-200" role="alert">
    <svg class="flex-shrink-0 w-5 h-5 text-yellow-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <div class="ml-3 text-sm font-medium text-yellow-700">
    A unique code will be sent to your email to update your infomation. <a href="#" class="font-semibold underline hover:text-yellow-800">Edit nomination</a>
    </div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-100 dark:bg-yellow-200 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 dark:hover:bg-yellow-300 inline-flex h-8 w-8" data-collapse-toggle="alert-border-4" aria-label="Close">
      <span class="sr-only">Dismiss</span>
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>

<div class="px-5 pt-3 pb-5 border rounded">

<form method="POST" action="{{ url('single-scholarship', ['id' => $single_scholar_data[0]->id ])}}">
    @csrf
    <!-- Amount -->
  <div class="md:flex  md:w-full md:gap-5">
    <div class="mt-4 md:w-full sm:w-full">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Child Full Name</label>
        <input type="text" value="{{old('child_full_name')}}"   name="child_full_name" id="password" placeholder="Enter Child Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block md:w-full w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
    </div>
    <div class="mt-4 md:w-full sm:w-full">
      <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Class</label>
      <input type="text" value="{{old('grade')}}"  name="grade" id="" placeholder="E.g JSS1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block md:w-full sm:w-full w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
    </div>
  </div>
    
  <div class="md:flex  md:w-full md:gap-5">

    <div class="mt-4 md:w-full">
        <label for="grade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Parent's Name</label>
        <input type="text"  value="{{old('parent_name')}}"  name="parent_name" id="parent_name" placeholder="Parent's Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
    </div>
    <div class="mt-4 md:w-full">
      <label for="grade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
      <input type="text"  value="{{old('email')}}"  name="email" id="email" placeholder="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
  </div>
  </div>

    <div class="mt-4">
      <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
      <input type="text" value="{{old('address')}}"  autocomplete="" name="address" id="" placeholder="E.g. Ikeja, Lagos" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
    </div>

    <div class="md:flex  md:w-full md:gap-5">
      <div class="mt-4 md:w-full">
        <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone No</label>
        <input type="text" value="{{old('phone_no')}}"  autocomplete="" name="phone_no" id="" placeholder="E.g. 080 XXX XXX" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
    </div>
    <div class="mt-4 md:w-full">
      <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">WhatsApp No</label>
      <input type="text" value="{{old('whatsapp_no')}}"   name="whatsapp_no" id=""placeholder="E.g. 080 XXX XXX" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
    </div>
  </div>

    <input type="hidden" value="{{ $post_id }}"   name="post_id"  placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
    <input type="hidden" value="{{ isset($single_scholar_data[0]->user_id)? $single_scholar_data[0]->user_id : '' }}"   name="user_id"  placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>

    <div class="mt-4">
        <label for="credit-amount" class="block mb-2 text-s
        m font-medium text-gray-900 dark:text-gray-300">Add more Details</label>
    <textarea
        value="{{old('nomiation_details')}}"
        name="nomination_details"
        class=" form-control block w-full px-3 py-1.5 text-base font-normaltext-gray-700 bg-white bg-clip-padding
        border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
        "
        id="exampleFormControlTextarea1"
        rows="3"
        >{{old('nomination_details')}}</textarea>
    </div>

        <div class='items-center  mt-4'>
            <x-button class="">
                {{ __('Submit Nomination') }}
            </x-button>
        </div>

</form>
</div>
    <!--nomination form-->

    </div>
</div>

</x-guest-layout>
    
    