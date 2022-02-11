<x-guest-layout>
  <!--titlebar-->
  <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 py-10">
    <div class="mx-auto sm:max-w-2xl">
      <div class="text-center">
        <div class="mb-12  max-w-xl md:mx-auto sm:text-center lg:max-w-2xl md:mb-6">
          <div>
            <p class="inline-block px-3 py-px mb-3 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
             24hrs Support Center
            </p>
          </div>
          <h2 class="max-w-lg font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
            <span class="relative inline-block z-0">
              <span class="relative">Hi!</span>
            </span>
            How can we help you today?
          </h2>
        </div>
  
        <form class="flex flex-col items-center w-full mt-6 md:mt-0 md:flex-row md:px-16">
          <x-input id="search-help" class="block  w-full" type="text" 
          name="searh-help" placeholder="Search help articles..." :value="old('email')" required autofocus />
  
          <button
            type="submit"
            class="animate__animated animate__rubberBand inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
          >
            Search
          </button>
        </form>
      </div>
    </div>
  </div>
  <!--title-->


<div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-5">
<h4 class="max-w-lg font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl mb-3">
  Popular Topics
</h4>

<div class="grid gap-5 mb-8 md:grid-cols-2 lg:grid-cols-3">
      <div class="p-5 duration-300 transform bg-white border rounded shadow-sm hover:-translate-y-2">
        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
          {{-- <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg> --}}
        </div>
        <h6 class="mb-2 font-bold leading-5">Account Settings</h6>
        <p class="text-sm text-gray-900">
          Aliquam scelerisque accumsan nisl, a mattis eros vestibulum et. Vestibulum placerat purus ut nibh aliquam fringilla. Aenean et tortor diam, id tempor elit.
        </p>
      </div>
      <div class="p-5 duration-300 transform bg-white border rounded shadow-sm hover:-translate-y-2">
        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
          {{-- <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg> --}}
        </div>
        <h6 class="mb-2 font-bold leading-5">Login and Password</h6>
        <p class="text-sm text-gray-900">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae. Sed ut perspiciatis unde omnis.
        </p>
      </div>
      <div class="p-5 duration-300 transform bg-white border rounded shadow-sm hover:-translate-y-2">
        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
          {{-- <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg> --}}
        </div>
        <h6 class="mb-2 font-bold leading-5">Training Videos</h6>
        <p class="text-sm text-gray-900">
          Flatland! Hypatia. Galaxies Orion's sword globular star cluster? Light years quasar as a patch of light gathered by gravity Vangelis radio telescope.
        </p>
      </div>
    </div>
  </div>
  
  <!--Image Carousel-->
  <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 pb-5 mb-10">
  <h4 class="max-w-lg font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl mb-3">
   Getting Started
  </h4>

  <div class="container mx-auto">
    <div class="grid md:grid-cols-4 gap-3 sm:grid-cols-1">
      <div class="md:col-span-1 border sm:col-span-1 rounded">
          <div class=" px-3 py-3">
              <ul>
                  <li></li>
              </ul>
          </div>
      </div>
      <div class="md:col-span-3 border sm:col-span-1 rounded">
          <div class="px-3 py-3 mb-3">
              <p class="text-black text font-bold">Using the SMP</p>
              <p class="text-gray-500">Create a HembaReruiter account to get started</p>
              <p class="text-sm text-gray-500">4 Articles in the section</p>
          </div>
      </div>
  </div>
  </div>
</div>
  <!--Image Carousel-->
<!--  -->
</x-guest-layout>