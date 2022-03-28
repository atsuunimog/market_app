<x-guest-layout>
  <div class=" h-80" style='background-image:url({{ asset('storage/GMAP-Banner3.jpg') }}); background-size:cover;'>
    <div class="container mx-auto px-4 sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
      <div class='grid grid-cols-2'>
          <div class=''>
            <!--no content-->
          </div>
          <div class='flex sm:items-center h-80'>
            <!--info get me a school-->
            <div class='py-4'>
              <h1 class='font-bold text-5xl text-white mb-1'>
                Blog Spot
              </h1>
              <p class="text-2xl text-white">
                Read blogs from over <strong>1000+</strong> active schools on Trenova consulting
              </p>
            </div>
            <!--info get me a school-->
          </div>
      </div>
    </div>
    </div>
    


    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-5 row-gap-5 mb-8 lg:grid-cols-4 sm:grid-cols-2">

          @foreach ($blog_data as $data)
          <a href="{{url('blog-content', ['id' => $data->id ])}}" aria-label="View Item" class="inline-block overflow-hidden duration-300 transform bg-white rounded shadow-sm hover:-translate-y-2">
            <div class="flex flex-col h-full">
              <img src="{{asset('storage/'.$data->blog_image)}}" class="object-cover w-full h-48" alt="blog-image" />
              <div class="flex-grow border border-t-0 rounded-b">
                <div class="p-5">

                  <div class='flex text-sm mb-2'>
                    <div class='w-full'>
                      <p class="font-normal m-0 p-0 text-gray-600 uppercase">
                        {{Carbon\Carbon::parse($data->created_at)->format('D, d')}}
                      </p>
                    </div>
                    <div class="text-center w-full">
                      <!--like icon-->
                    <p class="font-normal m-0 p-0 text-gray-600 uppercase">VIEWS <strong class='text-blue-600'>{{$data->views}}</strong></p>
                      <!--like icon-->
                   </div>
                </div>

                  <h3 class="text-xl font-bold pb-1 truncate">{{$data->blog_title}}</h3>
                  <p class="font-normal truncate text-gray-500">
                   {{$data->blog_content}}
                  </p>
                  <p><span class='text-xs font-bold block py-1 text-blue-600'>AUTHOR</span>
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
    