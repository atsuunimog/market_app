<x-guest-layout>
    <div class="px-4 py-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center text-center lg:max-w-2xl md:mb-12">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
           Login or SignUp
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
            <span class="relative inline-block">
              <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                <defs>
                  <pattern id="f51618fb-0edb-4bcb-b35a-ffc770941286" x="0" y="0" width=".135" height=".30">
                    <circle cx="1" cy="1" r=".7"></circle>
                  </pattern>
                </defs>
                <rect fill="url(#f51618fb-0edb-4bcb-b35a-ffc770941286)" width="52" height="24"></rect>
              </svg>
              <span class="relative">Sign In</span>
            </span>
            {{-- as a School or Affiliate --}}
          </h2>
        </div>
<div class="grid md:grid-cols-2 sm:grid-cols-1 py-5">
<div class="col-span-1 sm:col-span-1">
<div class="mb-3">
<!--add card-->
<div class="mx-auto text-center relative max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div  class='d-block shadow w-20 h-20 mx-auto px-3 py-3 mt-5 rounded'>
        <img src="https://img.icons8.com/external-kosonicon-flat-kosonicon/64/000000/external-stationary-back-to-school-kosonicon-flat-kosonicon.png"/>
    </div>
    <div class="p-5">
    <a href="#">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
     School Account
    </h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
       Make your school public and accessible. Let people find your school easily
    </p>
    <div class="flex items-center w-full my-5">
      <hr class="flex-1 border-gray-300" />
      <div class="px-3 text-xs text-gray-500 sm:text-sm">*</div>
      <hr class="flex-1 border-gray-300" />
    </div>
    <a href="{{ route('school-register') }}"
      type="submit"
      class=" inline-flex mx-auto min-w-full items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
      >
      Create School Account
    </a>
    </div>
    </div>
<!--//add card-->
</div>
</div>
<div class="col-span-1 sm:col-span-1">
<div class="mb-3">
<!--add card-->
<div class="mx-auto text-center relative max-w-sm bg-white rounded-lg   border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div  class='d-block shadow w-20 h-20 mx-auto px-3 py-3 mt-5 rounded'>
        <img class="mx-auto mb-3" height="64px" width="64px" 
        src="https://img.icons8.com/external-kmg-design-flat-kmg-design/64/000000/external-user-back-to-school-kmg-design-flat-kmg-design.png"/>
        
    </div>
    <div class="p-5">
    <a href="#">
    <p class="mb-2 font-bold  text-2xl tracking-tight text-gray-900 dark:text-white">
      Affiliate Account
    </p>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
     Earn passive income by publicly sharing school sholarship opportunites
    </p>

    <div class="flex items-center w-full my-5">
      <hr class="flex-1 border-gray-300" />
      <div class="px-3 text-xs text-gray-500 sm:text-sm">*</div>
      <hr class="flex-1 border-gray-300" />
    </div>
      <a href="{{ route('affiliate-register') }}"
          type="submit"
          class="inline-flex mx-auto min-w-full  items-center justify-center  h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
          >
          Create Affiliate Account
      </a>
    </div>
    </div>
        <!--//add card-->
    </div>
</div>
</div>
</x-guest-layout>