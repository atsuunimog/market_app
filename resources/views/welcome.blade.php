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
<div class="border mb-3 px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
  <p>Carousel</p>
</div>
<!--Image Carousel-->

<!--Image Carousel-->
<div class="border mb-3 px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
  <p>Page Filters</p>
</div>
<!--Image Carousel-->

<!--School Image Tiles-->
<div class="border px-4 mt-3 mb-5 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <p>School Image Tiles</p>
  </div>
<!--School Image Tiles-->

</x-guest-layout>
