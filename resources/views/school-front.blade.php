<x-guest-layout>
<div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
<div class="relative bg-red-600">
    <img class="object-cover w-full h-56 sm:h-96" src="{{ isset($profile_data[0]->banner_img)? asset('storage/'.$profile_data[0]->banner_img) : asset('storage/banner.jpg')  }} " alt="school-banner" />
    <div class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
      {{-- content --}}
      <img class="object-cover shadow absolute overflow-hidden left-24 z-50 -bottom-24 rounded-full w-52 h-52" 
      src="{{ isset($profile_data[0]->logo_img)? asset('storage/'.$profile_data[0]->logo_img) : asset('storage/school_logo.png')  }}" 
      alt="school-logo" />
</div>
</div>

<!--SECTION-->
<div class="animate__animated animate__fadeInUp px-4 pt-16 mb-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
<div class="flex flex-col lg:flex-row gap-3 pt-10 pb-4">
  <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
      <h2 class="font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
      {{  isset($profile_data[0]->school_name)? $profile_data[0]->school_name : '...' }}
      </h2>
  </div>
  <div class="lg:w-1/2">
      <p class="mb-4 text-base text-gray-700">
      <span class='font-bold text-black block'>About Us: </span>
    {{ isset($profile_data[0]->about_school)? $profile_data[0]->about_school : '...' }}
      </p>
  </div>
</div>

  <div class="grid gap-8 row-gap-5 lg:grid-cols-3">
    <div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
      <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
      <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
      <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
      <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
      <div class="relative p-5 bg-white  text-center rounded-sm">
        <div class="mx-auto">
          {{-- <i class="icon ion-trophy text-red-600 my-2 inline-block align-middle text-4xl"></i> --}}
          <img class="mx-auto mb-3" src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-medal-back-to-school-wanicon-flat-wanicon.png"/>
       </div>
       <h6 class="font-semibold leading-5">See Our Achievements</h6>
        <p class="mb-2 text-sm text-gray-900">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam.
        </p>
        <div class='text-center'>
          <a href="{{ url('school-achievement') }}"
            type="submit"
            class="inline-flex mx-auto  mt-3 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
          >
            See Achievements
          </a>
        </div>
      </div>
    </div>
    
    <div class=" relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
      <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
      <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
      <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
      <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
      <div class="relative p-5 bg-white  text-center rounded-sm">
        <div class="mx-auto">
          {{-- <i class="icon ion-person-add text-red-600 my-2 inline-block align-middle text-4xl"></i> --}}
          <img class="mx-auto mb-3" height="64px" width="64px" 
          src="https://img.icons8.com/external-kmg-design-flat-kmg-design/64/000000/external-user-back-to-school-kmg-design-flat-kmg-design.png"/>
       </div>
  
       <h6 class="font-semibold leading-5">Create Admission Account</h6>
        <p class="mb-2 text-sm text-gray-900">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam.
        </p>
        <div class='text-center'>
          <a href="{{ url('create-admission') }}"
            type="submit"
            class="inline-flex mx-auto  mt-3 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
          >
           Create Account
          </a>
        </div>
      </div>
    </div>

    <div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
      <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
      <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
      <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
      <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
      <div class="relative p-5 bg-white rounded-sm text-center">
        <div class="mx-auto">
           <img class='mx-auto mb-3' src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/000000/external-video-camera-multimedia-kiranshastry-solid-kiranshastry.png"/>        </div>
        <h6 class="font-semibold leading-5">Take a Video Tour</h6>
        <p class="mb-2 text-sm text-gray-900">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam.
        </p>
        <div class='text-center'>
          <a href=""
            type="submit"
            class="inline-flex mx-auto  mt-3 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
          >
            Start Tour
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--SECTION-->


<!--SECTION-->
<div class="animate__animated animate__fadeInUp px-4 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-10">
  <div class="grid gap-8 row-gap-5 lg:grid-cols-3">

    <div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
      <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
      <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
      <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
      <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
      <div class="relative p-5 bg-white  text-center rounded-sm">
        <div class="mx-auto">
          <img class='mx-auto mb-3' src="https://img.icons8.com/external-justicon-flat-justicon/64/000000/external-calendar-notifications-justicon-flat-justicon.png"/>
          {{-- <i class="icon ion-calendar text-red-600 my-2 inline-block align-middle text-4xl"></i> --}}
       </div>
       <h6 class="font-semibold leading-5">Upcoming Events</h6>
        <p class="mb-2 text-sm text-gray-900">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam.
        </p>
        <div class='text-center'>
          <a href="{{ url('upcoming-events') }}"
            type="submit"
            class="inline-flex mx-auto  mt-3 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
          >
            See All Events
          </a>
        </div>
      </div>
    </div>
    
    <div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
      <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
      <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
      <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
      <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
      <div class="relative p-5 bg-white  text-center rounded-sm">
        <div class="mx-auto">
          <img class="mx-auto mb-3" src="https://img.icons8.com/external-microdots-premium-microdot-graphic/64/000000/external-exam-education-science-vol1-microdots-premium-microdot-graphic-2.png"/>
       </div>
       <h6 class="font-semibold leading-5">Admission Test Result</h6>
        <p class="mb-2 text-sm text-gray-900">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam.
        </p>
        <div class='text-center'>
          <a href=""
            type="submit"
            class="inline-flex mx-auto  mt-3 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
          >
            See All Results
          </a>
        </div>
      </div>
    </div>

    <div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
      <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
      <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
      <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
      <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
      <div class="relative p-5 bg-white rounded-sm text-center">
        <div class="mx-auto">
          <img class='mx-auto mb-3' src="https://img.icons8.com/external-flat-geotatah/64/000000/external-choosing-election-world-flat-flat-geotatah.png"/>
        </div>
        <h6 class="font-semibold leading-5">Enrolment/Scholarship Nomination</h6>
        <p class="mb-2 text-sm text-gray-900">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam.
        </p>
        <div class='text-center'>
          <a href="{{ url('private-scholarship', ['username' => $username]) }}"
            type="submit"
            class="inline-flex mx-auto  mt-3 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
          >
            See All Scholarship
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--SECTION-->


<!--SECTION-->
{{-- <div class="text-center pb-10">
  <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
    See Gallery
    <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
      <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
    </svg>
  </a>
</div> --}}
<!--SECTION -->
</x-guest-layout>

