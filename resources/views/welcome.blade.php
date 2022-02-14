<x-guest-layout>

<style>

.slick-prev{
  font-family:initial !important;
  color:#333; 
  background-color:red !important;
  z-index: 999;
  position: absolute;
  top:40%;
  left:0px;
}

.slick-next{
  font-family:initial !important;
  color:#333; 
  background-color:red !important;
  z-index: 999;
  position: absolute;
  top:40%;
  right:0px;
}

.slick-next:after{
  content:"";
}
</style>

    <!--titlebar-->
    <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 pt-10">
      <div class="mx-auto sm:max-w-2xl">
        <div class="text-center">
          <div class="mb-12  max-w-xl md:mx-auto sm:text-center lg:max-w-2xl md:mb-6">
            <div>
              <p class="inline-block px-3 py-px mb-3 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
               School Marketing Platform
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
            <x-input id="email" placeholder='Enter School Name' class="block  w-full" type="email" name="email" :value="old('email')" required autofocus />
    
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
    <div class="relative px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl pt-10">
      <div class="slick-slider">
        <div class="px-3 w-full">
          <!--slick content-->
            <div class="border rounded shadow text-center px-3 py-5">
              <img class="object-cover d-block mx-auto w-20 h-20 rounded-full shadow" 
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrzTtyzDJJxUkJeZMzhSmk0twx8K2xODwYpA&usqp=CAU" alt="Person" />
              <p class=" font-bold py-3">1 XYZ Primary and Secondary School Scholarship</p>
            </div>
          <!--slick content-->
        </div>

        <div class="px-3 w-full">
          <!--slick content-->
          <div class="border rounded shadow text-center px-3 py-5">
            <img class="object-cover d-block mx-auto w-20 h-20 rounded-full shadow" 
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrzTtyzDJJxUkJeZMzhSmk0twx8K2xODwYpA&usqp=CAU" alt="Person" />
            <p class=" font-bold py-3">2 XYZ Primary and Secondary School Scholarship</p>
          </div>
        <!--slick content-->
        </div>

        <div class="px-3 w-full">
           <!--slick content-->
           <div class="border rounded shadow text-center px-3 py-5">
            <img class="object-cover d-block mx-auto w-20 h-20 rounded-full shadow" 
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrzTtyzDJJxUkJeZMzhSmk0twx8K2xODwYpA&usqp=CAU" alt="Person" />
            <p class=" font-bold py-3">3 XYZ Primary and Secondary School Scholarship</p>
          </div>
        <!--slick content-->
        </div>

        <div class="px-3 w-full">
           <!--slick content-->
           <div class="border rounded shadow text-center px-3 py-5">
            <img class="object-cover d-block mx-auto w-20 h-20 rounded-full shadow" 
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrzTtyzDJJxUkJeZMzhSmk0twx8K2xODwYpA&usqp=CAU" alt="Person" />
            <p class=" font-bold py-3">4 XYZ Primary and Secondary School Scholarship</p>
          </div>
        <!--slick content-->
        </div>

        <div class="px-3 w-full">
           <!--slick content-->
           <div class="border rounded shadow text-center px-3 py-5">
            <img class="object-cover d-block mx-auto w-20 h-20 rounded-full shadow" 
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrzTtyzDJJxUkJeZMzhSmk0twx8K2xODwYpA&usqp=CAU" alt="Person" />
            <p class=" font-bold py-3">5 XYZ Primary and Secondary School Scholarship</p>
          </div>
        <!--slick content-->
        </div>

        <div class="px-3 w-full">
           <!--slick content-->
           <div class="border rounded shadow text-center px-3 py-5">
            <img class="object-cover d-block mx-auto w-20 h-20 rounded-full shadow" 
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrzTtyzDJJxUkJeZMzhSmk0twx8K2xODwYpA&usqp=CAU" alt="Person" />
            <p class=" font-bold py-3">6 XYZ Primary and Secondary School Scholarship</p>
          </div>
        <!--slick content-->
        </div>

      </div>
    </div>
    <!--Image Carousel-->
    
    <!--Image Carousel-->
     <!--filters-->
     <div class="relative px-4 py-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
     <div class="grid md:grid-cols-4 gap-3 sm:grid-cols-1">
      <div class="md:col-span-1 border sm:col-span-1 rounded">
          <div class="flex px-3 py-3 text-center">
               <div class='w-full'>
                  <button>
                    <i class="ion-navicon-round text-2xl"></i>
                  </button>
               </div>
               <div class='w-full'>
                 <button>
                    <i class="icon ion-grid text-2xl"></i>
                 </button>
               </div>
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



  <div class="max-w-sm bg-white rounded-lg position-relative border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
  <div class="flex flex-col items-center pb-10 px-3 text-center">
  <img class="mt-5 w-20 h-20 rounded-full shadow-lg" 
    src="https://cdn.logojoy.com/wp-content/uploads/2018/05/30154810/13_big2-768x591.png"
   alt="Bonnie image">
  <h3 class="mb-1 text-xl mt-3 font-bold text-gray-900 dark:text-white">Dowen College</h3>
  <span class="text-sm  text-gray-500 dark:text-gray-400">
    Ikeja, Lagos State
  </span>
  <div class="mt-4 space-x-3 lg:mt-6 absolute bottom-0 pb-5">
      <a href="{{ url('school-front') }}"
      type="submit"
      class="inline-flex mx-auto  mt-3 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
    >
      Learn more
    </a>
  </div>
  </div>
  </div>
  

  <div class="max-w-sm relative bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="flex flex-col items-center pb-10 px-3 text-center">
    <img class="mt-5 w-20 h-20 rounded-full shadow-lg" 
      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrzTtyzDJJxUkJeZMzhSmk0twx8K2xODwYpA&usqp=CAU"
     alt="Bonnie image">
    <h3 class="mb-1 text-xl mt-3 font-bold text-gray-900 dark:text-white">Indian Institute of Technology</h3>
    <span class="text-sm  text-gray-500 dark:text-gray-400">
      Ikeja, Lagos State
    </span>
    <div class="mt-4 space-x-3 lg:mt-6 absolute bottom-0 pb-5">
        <a href="{{ url('school-front') }}"
        type="submit"
        class="inline-flex mx-auto  mt-3 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
      >
        Learn more
      </a>
    </div>
    </div>
    </div>

    <div class="max-w-sm relative bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
      <div class="flex flex-col items-center pb-10 px-3 text-center">
      <img class="mt-5 w-20 h-20 rounded-full shadow-lg" 
        src="https://www.nigerianlawschool.edu.ng/images/logo-170x172.png"
       alt="Bonnie image">
      <h3 class="mb-1 text-xl mt-3 font-bold text-gray-900 dark:text-white">Nigerian Counsel of Legal Education</h3>
      <span class="text-sm  text-gray-500 dark:text-gray-400">
        Ikeja, Lagos State
      </span>
      <div class="mt-4 space-x-3 lg:mt-6 absolute bottom-0 pb-5">
          <a href="{{ url('school-front') }}"
          type="submit"
          class="inline-flex mx-auto  mt-3 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
        >
          Learn more
        </a>
      </div>
      </div>
      </div>


      <div class="max-w-sm relative bg-white rounded-lg border  border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col items-center pb-10 px-3 text-center">
        <img class="mt-5 w-20 h-20 rounded-full shadow-lg" 
          src="https://upload.wikimedia.org/wikipedia/en/d/d2/UniLagos.jpg"
         alt="Bonnie image">
        <h3 class="mb-1 text-xl mt-3 font-bold text-gray-900 dark:text-white">Call to Glory Primary and Secondary School</h3>
        <span class="text-sm  text-gray-500 dark:text-gray-400">
          Ikeja, Lagos State
        </span>
        <div class="mt-4 space-x-3 lg:mt-6 pb-5">
            <a href="{{ url('school-front') }}"
            type="submit"
            class="inline-flex mx-auto  mt-3 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
          >
            Learn more
          </a>
        </div>
        </div>
        </div>    
    </div>
  </div>
  <!--page tiles-->
</x-guest-layout>

    <script type="text/javascript">
   $('.slick-slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      mobileFirst: true, 
      adaptiveHeight: true,
      responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
          breakpoint: 300,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    </script>