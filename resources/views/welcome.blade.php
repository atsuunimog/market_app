<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Market App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!--icons-->
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

 @include('default_layout.header')

<!--titlebar-->
<div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 py-10">
  <div class="max-w-2xl mx-auto sm:max-w-xl md:max-w-2xl">
    <div class="text-center">
      <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
        <div>
          <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
            Data Driven Application
          </p>
        </div>
        <h2 class="max-w-lg font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
          <span class="relative inline-block">
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
          Marketing Platform
        </h2>
      </div>

      <form class="flex flex-col items-center w-full mb-4 md:flex-row md:px-16">
        <input
          placeholder="Search School Name"
          required=""
          type="text"
          class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
        />
        <button
          type="submit"
          class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
        >
          Search
        </button>
      </form>

      <form class="flex flex-col items-center w-full mb-4 md:px-16">
        <p class="mb-3">Didn't find what you're looking for? Use our advanced search</p>
        <button
        type="submit"
        class="inline-flex items-center mb-3 justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
        >
        Advanced Search
        </button>
      </form>

      <p class="max-w-md mx-auto mb-10 text-xs text-gray-600 sm:text-sm md:mb-3">
        Use our advanced search filters to find schools based on area, town, population, school name and scholarship offer
      </p>
    </div>
  </div>
</div>
<!--title-->

<!--Image Carousel-->
  <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <p>Custom image carousel</p>
  </div>
<!--Image Carousel-->

<!--School Image Tiles-->
<div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <p>School Image Tiles</p>
</div>
<!--School Image Tiles-->

@include('default_layout.footer')

</body>
</html>
