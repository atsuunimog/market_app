<x-guest-layout>
    <!--titlebar-->
    <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 py-10">
      <div class="mx-auto sm:max-w-2xl">
        <div class="text-center">
          <div class="mb-12  max-w-xl md:mx-auto sm:text-center lg:max-w-2xl md:mb-6">
            <div>
              <p class="inline-block px-3 py-px mb-3 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                Data Driven Software
              </p>
            </div>
            <h2 class="max-w-lg font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
              <span class="relative inline-block z-0">
                <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                  <defs>
                    <pattern id="b039bae0-fdd5-4311-b198-8557b064fce0" x="0" y="0" width=".135" height=".30">
                      <circle cx="1" cy="1" r=".7"></circle>
                    </pattern>
                  </defs>
                  <rect fill="url(#b039bae0-fdd5-4311-b198-8557b064fce0)" width="52" height="24"></rect>
                </svg>
                <span class="relative">Trenova</span>
              </span>
              SMP
            </h2>
          </div>
    
          <form class="flex flex-col items-center w-full mt-6 md:mt-0 md:flex-row md:px-16">
            <x-input id="email" class="block  w-full" type="email" name="email" :value="old('email')" required autofocus />
    
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
    
    <!--Image Carousel-->
    <div class="relative px-4 border py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
      <p>Scholarship Carousel</p>
    </div>
    <!--Image Carousel-->
    
    <!--Image Carousel-->
     <!--filters-->
     <div class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
     <div class="grid md:grid-cols-4 gap-3 sm:grid-cols-1">
      <div class="md:col-span-1 border sm:col-span-1 rounded">
          <div class=" px-3 py-3 text-center">
              Toggle Menu
          </div>
      </div>
      <div class="md:col-span-3 border sm:col-span-1 rounded">
          <div class="px-3 py-3">
             Filter buttions
          </div>
      </div>
     <!--filters-->
    </div>
  </div>
    <!--Image Carousel-->
    
    
      <!--page tiles-->
      <div class="relative px-4 pb-16 pt-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">
        <div class="absolute inset-x-0 top-0 items-center justify-center hidden overflow-hidden md:flex md:inset-y-0">
          <svg viewBox="0 0 88 88" class="w-full max-w-screen-xl text-indigo-100">
            <circle fill="currentColor" cx="44" cy="44" r="15.5"></circle>
            <circle fill-opacity="0.2" fill="currentColor" cx="44" cy="44" r="44"></circle>
            <circle fill-opacity="0.2" fill="currentColor" cx="44" cy="44" r="37.5"></circle>
            <circle fill-opacity="0.3" fill="currentColor" cx="44" cy="44" r="29.5"></circle>
            <circle fill-opacity="0.3" fill="currentColor" cx="44" cy="44" r="22.5"></circle>
          </svg>
        </div>
        <div class="relative grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
          <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
            <div class="p-5">
              <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                  <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                </svg>
              </div>
              <p class="mb-2 font-bold">Football Sports</p>
              <p class="text-sm leading-5 text-gray-900">
                Sed ut perspiciatis unde omnis iste. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
          </div>
          <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
            <div class="p-5">
              <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                  <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                </svg>
              </div>
              <p class="mb-2 font-bold">Bowling Sports</p>
              <p class="text-sm leading-5 text-gray-900">
                Disrupt inspire and think tank, social entrepreneur but preliminary thinking think tank compelling.
              </p>
            </div>
            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
          </div>
          <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
            <div class="p-5">
              <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                  <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                </svg>
              </div>
              <p class="mb-2 font-bold">Cycling Sports</p>
              <p class="text-sm leading-5 text-gray-900">
                A slice of heaven. O for awesome, this chocka full cuzzie is as rip-off as a cracker.
              </p>
            </div>
            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
          </div>
          <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
            <div class="p-5">
              <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                  <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                </svg>
              </div>
              <p class="mb-2 font-bold">Weight Lifting Sports</p>
              <p class="text-sm leading-5 text-gray-900">
                Meanwhile, in behind the bicycle shed, Hercules Morse, as big as a horse.
              </p>
            </div>
            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
          </div>
          <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
            <div class="p-5">
              <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                  <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                </svg>
              </div>
              <p class="mb-2 font-bold">Golf Sports</p>
              <p class="text-sm leading-5 text-gray-900">
                Disrupt inspire and think tank, social entrepreneur but preliminary thinking think tank compelling.
              </p>
            </div>
            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
          </div>
          <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
            <div class="p-5">
              <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                  <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                </svg>
              </div>
              <p class="mb-2 font-bold">Hockey Sports</p>
              <p class="text-sm leading-5 text-gray-900">
                A business big enough that it could be listed on the NASDAQ goes belly up.
              </p>
            </div>
            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
          </div>
          <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
            <div class="p-5">
              <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                  <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                </svg>
              </div>
              <p class="mb-2 font-bold">Shooting Sports</p>
              <p class="text-sm leading-5 text-gray-900">
                Lookout flogging bilge rat main sheet bilge water nipper fluke to go on account heave down clap of thunder.
              </p>
            </div>
            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
          </div>
          <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
            <div class="p-5">
              <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                  <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                </svg>
              </div>
              <p class="mb-2 font-bold">Martial Arts</p>
              <p class="text-sm leading-5 text-gray-900">
                Webtwo ipsum orkut reddit meebo skype vimeo jajah spock empressr zimbra, mobly napster.
              </p>
            </div>
            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
          </div>
        </div>
      </div>
      <!--page tiles-->
    </x-guest-layout>