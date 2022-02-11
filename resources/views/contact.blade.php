<x-guest-layout>   
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-10 lg:grid-cols-2">
      <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">
        <div class="">
          <h2 class="max-w-lg mb-3 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
           Contact Us
          </h2>
            <p class='mb-3'> 
              Address: 7B Ogunsiji Close, Allen, Ikeja, Lagos. We are also available online. Start Chat
            <p>
            <p class='mb-5'>
              <span class='font-bold'><i class="icon ion-android-call"></i></span> +234 817 936 1381
              &nbsp;
              <span class='font-bold'><i class="icon ion-social-whatsapp-outline"></i></span> +234 817 936 1381
            </p>      
          <!--contact form-->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="grid grid-cols-2 gap-2">
                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('First Name')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
                </div>
                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Last Name')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-2 mt-4">
              <!-- Name -->
              <div>
                  <x-label for="name" :value="__('Email')" />
                  <x-input id="name" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
              </div>
              <!-- Email Address -->
              <div>
                  <x-label for="email" :value="__('Type Subject')" />
                  <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
              </div>
          </div>

            <!-- Password -->
            <div class="mt-4">
              <textarea
              class=" form-control block w-full px-3 py-1.5 text-base font-normaltext-gray-700 bg-white bg-clip-padding
              border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
              "
              id="exampleFormControlTextarea1"
              rows="3"
              placeholder="Your message"
            ></textarea>
            </div>

            <div class='items-center  mt-4'>
                <x-button class="w-full">
                    {{ __('Send Message') }}
                </x-button>
            </div>
        </form>
          <!--contact form-->
        </div>
      </div>

      <div class="flex items-center justify-center -mx-4 lg:pl-8">
        <div class="flex flex-col items-end px-3">
          <img
            class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56"
            src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
            alt=""
          />
          <img class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40" src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
        </div>
        <div class="px-3">
          <img class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80" src="https://images.pexels.com/photos/3182739/pexels-photo-3182739.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" alt="" />
        </div>
      </div>
    </div>
  </div>
</x-guest-layout>

