<x-guest-layout>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
              All Blog Post
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
           Blog
          </h2>
          <p class="text-base text-gray-700 md:text-lg">
              Read blogs from over 1000+ schools
          </p>
        </div>


        <div class="grid gap-5 row-gap-5 mb-8 lg:grid-cols-4 sm:grid-cols-2">

          @foreach ($blog_data as $data)
          <a href="{{url('blog-content', ['id' => $data->id ])}}" aria-label="View Item" class="inline-block overflow-hidden duration-300 transform bg-white rounded shadow-sm hover:-translate-y-2">
            <div class="flex flex-col h-full">
              <img src="{{asset('storage/'.$data->blog_image)}}" class="object-cover w-full h-48" alt="blog-image" />
              <div class="flex-grow border border-t-0 rounded-b">
                <div class="p-5">

                  <div class='flex'>
                    <div class='w-full'>
                      <p class="font-normal m-0 p-0 text-gray-600 uppercase">
                        {{Carbon\Carbon::parse($data->created_at)->format('D, d')}}
                      </p>
                    </div>
                    <div class="text-center w-full">
                      <!--like icon-->
                     <i class="icon ion-eye text-gray-500"></i>
                      <!--like icon-->
                      {{$data->views}}
                   </div>
                </div>

                  <h3 class="text-xl font-bold pb-1 truncate">{{$data->blog_title}}</h3>
                  <p class="font-normal truncate text-gray-500">
                   {{$data->blog_content}}
                  </p>
                  <p><span class='text-xs font-bold block py-1 text-blue-500'>AUTHOR</span>
                  <span class='mb-2 leading-5 text-black'>{{$data->school_name}}</span></p>
                
                </div>
              </div>
            </div>
          </a>
          @endforeach
        </div>

       
          
        <div class="text-center">
            {{$blog_data->links()}}
        </div>
      </div>
</x-guest-layout>
    