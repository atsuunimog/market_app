<!--navbar-->
<div class="bg-gray-900">
  <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="relative flex grid items-center grid-cols-2 lg:grid-cols-3">
      <ul class="flex items-center hidden space-x-8 lg:flex">
        <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Home</a></li>
        <li><a href="{{ url('pricing') }}" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Pricing</a></li>
        {{-- <li><a href="{{ url('help') }}" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Help</a></li> --}}
        <li><a href="{{ url('blog') }}" aria-label="Blog" title="Blog" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Blog</a></li>
        <li>
          <a onclick="toggle_mobile_sub_nav(this); return false;"  aria-label="Product pricing" title="Product pricing" class="cursor-pointer relative font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">More
              <i class="icon ion-chevron-down text-xs" ></i>
              <div id="dropdown-toggle" class="absolute top-8 text-black bg-white w-60 z-50  border px-3 py-3 rounded shadow-gray-900 hidden">
                    <ul>
                      <li><a href="{{ url('edit-nomination') }}" class='mb-3 block'>Edit Nomination<i class='icon ion-android-arrow-forward float-right'></i></a></li>
                      <li><a href="{{ url('contact') }}" class='mb-3 block'>Contact Us<i class='icon ion-android-arrow-forward float-right'></i></a></li>
                      <li><a href="{{ url('about') }}" class='mb-3 block'>About Trenova<i class='icon ion-android-arrow-forward float-right'></i></a></li>
                      {{-- <li><a href="{{ url('scholarship') }}" class='mb-3 block'>Scholarship<i class='icon ion-android-arrow-forward float-right'></i></a></li> --}}
                      {{-- <li><a href="{{ url('school-front') }}" class='mb-3 block'>School Landing Page<i class='icon ion-android-arrow-forward float-right'></i></a></li> --}}
                      <li><a href="{{ url('faq') }}" class='mb-3 block'>FAQ<i class='icon ion-android-arrow-forward float-right'></i></a></li>
                    </ul>
              </div>
          </a>
        </li>
      </ul>
      <a href="/" aria-label="Company" title="Company" class="inline-flex items-center lg:mx-auto">
        <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">
          <!--add trenova logo-->
          <!--add trenova logo-->
        </span>
      </a>

    
      @if (Route::has('login'))
      
          <ul class="flex items-center hidden ml-auto space-x-8 lg:flex">
            @auth
            <!-- school account login menu-->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
              <x-dropdown align="right" width="48">
                  <x-slot name="trigger">
                      <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                          <div class='text-white text-base'>{{ Auth::user()->username }}</div>

                          <div class="ml-1">
                              <svg class="fill-current h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                              </svg>
                          </div>
                      </button>
                  </x-slot>

                  <x-slot name="content">
                      <!-- Authentication -->
                      <x-dropdown-link href="{{ route('dashboard') }}">
                      Dashboard
                      </x-dropdown-link>
                      
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <x-dropdown-link :href="route('logout')"
                                  onclick="event.preventDefault();
                                              this.closest('form').submit();">
                              {{ __('Log Out') }}
                          </x-dropdown-link>
                      </form>
                  </x-slot>
              </x-dropdown>
          </div>

            @else
                <li><a href="{{ route('login') }}"    class="bg-indigo-500 inline-flex items-center justify-center h-10 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none  hover:text-teal-accent-400">Log in</a></li>
                @if (Route::has('register'))
                  <li>
                    <a href="{{ url('register') }}" 
                    class=" bg-indigo-500 inline-flex items-center justify-center h-10 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none  hover:text-teal-accent-400">Sign In
                    </a>
                  </li>
                @endif
            @endauth
          </ul>
      @endif

      <!-- Mobile menu -->
      <div class="ml-auto lg:hidden">
        <button onclick='show_mobile_menu(this)' aria-label="Open Menu" title="Open Menu" class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
          <svg class="w-5 text-white" viewBox="0 0 24 24">
            <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
            <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
            <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
          </svg>
        </button>
        <!-- Mobile menu dropdown -->
        <div class="absolute top-0 left-0 w-full z-50 hidden" id="mobile-menu-panel">
          <div class="p-5 bg-white border rounded shadow-sm">
            <div class="flex items-center justify-between mb-4">
              <div>
                <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                  <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">GMAS APP</span>
                </a>
              </div>
              <div>
                <button onClick="hide_mobile_menu(this)"  aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                  <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                    <path
                      fill="currentColor"
                      d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                    ></path>
                  </svg>
                </button>
              </div>
            </div>
            <nav>
              <ul class="space-y-4">
                <li><a href="pricing" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                <li><a href="blog" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Blog</a></li>
                <li><a href="contact" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Contact Us</a></li>
                <li><a href="about" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About Us</a></li>
                <li><a href="help" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Help</a></li>

                @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/dashboard') }}" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Dashboard</a></li>
                        @else
                            <li>
                              <a href="{{ route('login') }}"    
                                aria-label="Sign in" title="Sign in" 
                                class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-dark transition duration-200 rounded shadow-md white border hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                                Log in
                              </a>
                            </li>
                            @if (Route::has('register'))
                              <li><a href="{{ route('register') }}" 
                                class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-500 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"           
                                >Sign In</a>
                              </li>
                            @endif
                        @endauth
                  @endif
              </ul>
            </nav>
          </div>
        </div>
       <!--mobile -->
      </div>
    </div>
  </div>
</div>
<!--navbar-->
