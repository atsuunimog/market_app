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
    {{-- <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 pt-10">
      <div class="mx-auto sm:max-w-2xl">
        <div class="text-center">
          <div class="max-w-xl md:mx-auto sm:text-center lg:max-w-2xl">
            <div>
              <p class="inline-block px-3 py-px mb-3 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
               GET ME A SCHOOL
              </p>
            </div>
            <h2 class="max-w-lg sm:mb-3 md:mb-3 mb-3 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
              GMAS
            </h2>
          </div>
        </div>
      </div>
    </div> --}}
    <!--title-->
<div class=" h-96" style='background-image:url({{ asset('storage/GMAP-Banner1.jpg') }}); background-size:cover;'>
    <div class="container mx-auto px-4 sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class='grid grid-cols-2'>
            <div class=''>
              <!--no content-->
            </div>
            <div class='flex sm:items-center h-96'>
              <!--info get me a school-->
              <div class='py-4'>
                <h1 class='font-bold text-5xl text-white mb-1'>
                   Get<span style='color:yellow'>.</span>me<span style='color:yellow'>.</span>a<span style='color:yellow'>.</span>school
                </h1>
                <p class="text-2xl text-white">A social and interactive platfom connecting schools to the wider world
                </p>
              </div>
              <!--info get me a school-->
            </div>
        </div>
    </div>
</div>


<div class='py-10 text-center w-full'>
  <h1 class=' font-bold text-3xl'>Find Scholarship Opportunities</h1>
  <p class='mt-2 text-lg'> Nominate your ward or a Candidate to benefit from available scholarship programmes from over <strong class='font-bold text-3xl'>1000+</strong> schools</p>
</div>
    
    <!--Image Carousel-->
    <div class="relative px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
      <div class="slick-slider">
        @foreach($all_scholar as $scholar_data)
        <div class="px-3 w-full">
          <!--slick content-->
            <div class="border rounded px-3 py-5 h-60 relative">
              <p class='font-bold text-red-800 text-sm mb-3'><i class="icon ion-person"></i> &nbsp; SCHOLARSHIP</p>
              <h3 class="text-xl font-bold pb-1 truncate">{{$scholar_data->title}}</h3>
              <p class='truncate pb-1  font-normal text-gray-500'>{{$scholar_data->scholarship_details}}</p>
              <p class='font-bold  uppercase'><strong>Grade:</strong> {{$scholar_data->grade}}</p>
              <div class='absolute right-5 bottom-7'>
              <a href='{{ url('single-scholarship', ['id' => $scholar_data->id])}}' type="button"
               class="mx-auto rounded text-white uppercase bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium  py-3 text-xs px-5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">
              Apply</a>
              </div>
            </div>
          <!--slick content-->
        </div>
        @endforeach
      </div>

      <div class='py-10 mx-auto flex'>
        <a href='{{ url('scholarships') }}' type="button"
        class="inline-block mx-auto text-xs uppercase py-3 px-6 tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none">
        All Scholarships
        </a>
      </div>
  </div>
  <!--Image Carousel-->

  <!--school listing info-->
<div class=' px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8'>
  <h1 class=' font-bold text-3xl'>Find Schools</h1>
  <p class='mb-3 text-lg'>Search for schools within your region</p>
</div>
<!--school listing info-->
    
    <!--Image Carousel-->
     <!--filters-->
     <div class="relative px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 hidden">
     <div class="grid md:grid-cols-4 gap-3 sm:grid-cols-1 items-center">
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
      <div class="md:col-span-3 sm:col-span-1 rounded">
          <div class=" py-3 px-3">
            <!--search form-->
            <form class="flex flex-col items-center w-full md:mt-0 md:flex-row">
              <x-input id="email" placeholder='Enter School Name' class="block  w-full" type="email" name="email" :value="old('email')" required autofocus />
              <button
                type="submit"
                class="animate__animated animate__rubberBand inline-flex  font-bold items-center justify-center w-full h-12 px-6  tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-indigo-500 focus:shadow-outline focus:outline-none"
              >
                Search
              </button>
            </form>
            <!--//search form-->
          </div>
      </div>
     <!--filters-->
    </div>
  </div>
  <!--Image Carousel-->
    
<!--page tiles-->
<div class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        
<div class="absolute inset-x-0 top-0 items-center justify-center hidden overflow-hidden md:flex md:inset-y-0">
  <svg viewBox="0 0 88 88" class="w-full max-w-screen-xl text-indigo-100">
    <circle fill="currentColor" cx="44" cy="44" r="15.5"></circle>
    <circle fill-opacity="0.2" fill="currentColor" cx="44" cy="44" r="44"></circle>
    <circle fill-opacity="0.2" fill="currentColor" cx="44" cy="44" r="37.5"></circle>
    <circle fill-opacity="0.3" fill="currentColor" cx="44" cy="44" r="29.5"></circle>
    <circle fill-opacity="0.3" fill="currentColor" cx="44" cy="44" r="22.5"></circle>
  </svg>
</div>

<div class="relative grid gap-5 sm:grid-cols-2 lg:grid-cols-4 py-10">

@foreach ($all_school as  $school_data)

<div class="max-w-sm h-60 bg-white rounded-lg relative border border-gray-200  dark:bg-gray-800 dark:border-gray-700">
  <div class="flex flex-col items-center pb-10 px-3 text-center">
  <img class="mt-5 w-20 h-20 rounded-full shadow-lg" 
    src="{{isset($school_data->logo_img)? asset('storage/'.$school_data->logo_img) : asset('storage/school_logo.png')}}"
   alt="Profile-Image">
  <h3 class="mb-1 text-xl mt-3 font-bold text-gray-900 dark:text-white">
   
   @if(strlen($school_data->school_name) > 20)
      <?php  $result = substr($school_data->school_name, 0, 30); ?>
      {{$result.=" ...";}}
   @else
      {{$school_data->school_name}}
   @endif

  </h3>
  <div class='absolute left-5 right-5 bottom-5'>
    <a href='{{ url('school-front/'.$school_data->username)}}' type="button"
     class="mx-auto rounded text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 uppercase focus:ring-gray-300 font-medium  py-3 text-xs px-5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">
    Learn more
    </a>
  </div>
  </div>
  </div>
@endforeach 
</div>


<div class='container mx-auto md:w-1/4  my-10'>
  {{$all_school->links()}}
</div>

</div>

<!--afiliate banner-->
<div class=" h-96" style='background-image:url({{ asset('storage/GMAP-Banner4.jpg') }}); background-size:cover;'>
  <div class="container mx-auto px-4 sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
      <div class='grid grid-cols-2'>
          <div class='flex sm:items-center h-96'>
            <!--info get me a school-->
            <div class='py-4'>
              <h1 class='font-bold text-5xl text-white mb-1'>
                Earn Cash Rewards
              </h1>
              <p class="text-2xl text-white">Become an affiliate to earn cash rewards above 
                <span style='color:yellow' class='font-bold text-4xl'>₦50,000</span> per nomination just from the comfort of your home
              </p>
              <a href="{{ url('affiliate-register') }}" 
              class=" mt-4 bg-indigo-500 inline-flex items-center justify-center h-12  px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none  hover:text-teal-accent-400">
              Become an Affiliate
              </a>
            </div>
            <!--info get me a school-->

            <div class=''>
              <!--no content-->
            </div>

          </div>
      </div>
  </div>
</div>
<!--affiliate banner-->

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