<x-guest-layout>
    <div class="grid grid-cols-1">
        <!--blog content from school-->
        <div class="">
            <div class="px-4 pt-16 pb-3 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-20 lg:pb-5">
                <div class="mx-auto sm:text-center lg:max-w-2xl">
                  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                    <div>
                      <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                       BLOG POST
                      </p>
                    </div>
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                      {{$current_blog_data[0]->blog_title}}
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                      Published on
                      {{Carbon\Carbon::parse($current_blog_data[0]->created_at)->format('d, M, Y')}}
                    </p>
                  </div>
                  <div class="mb-4 transition-shadow duration-300 hover:shadow-xl lg:mb-6">
                    <img class="object-cover w-full h-56 rounded shadow-lg sm:h-64 md:h-80 lg:h-96" 
                    src="{{asset('storage/'.$current_blog_data[0]->blog_image)}}" alt="blog-post-image" />
                  </div>

                  <!--like comment and views-->
                  <div class='inline-block mx-auto'>
                  <div class="flex mx-auto" style='font-size:1.3em;'>
                    <div class="px-3">
                      <i class="icon ion-thumbsup"></i>
                      {{$current_blog_data[0]->upvote}}
                      </div>
                    <div class="px-3">
                      <i class="icon ion-eye"></i>
                      {{$current_blog_data[0]->views}}
                       </div>
                    <div class="px-3">
                      <i class="icon ion-chatbox"></i>
                       {{$comment_count}}</div>
                  </div>
                </div>

                  <p class="max-w-xl my-10 text-gray-700 sm:mx-auto text-left text-lg">
                    {{$current_blog_data[0]->blog_content}}
                  </p>
                  
                  <!--like buttons-->
                  <div class='inline-block mx-auto mt-5'>
                  <div class="flex">
                    <form method="get" action="{{ url('blog-content', ['id' => $current_blog_data[0]->id])}}">
                      @csrf
                      <input type='hidden' name='like' value='1'>
                    <div  class="px-5 mx-auto">
                        <button class='border rounded-full p-2 shadow hover:bg-cyan-200 transition-all'>
                            <img height='40px' width='45px' src="https://img.icons8.com/pastel-glyph/64/000000/thumb-up--v2.png"/>
                        </button>
                      </div>
                    </form>
                    {{-- <div class="px-5">
                      <button class="border rounded-full p-2 shadow hover:bg-cyan-200 transition-all">
                          <img height='40px' width='45px' src="https://img.icons8.com/pastel-glyph/64/000000/thumbs-down--v2.png"/>
                      </button>
                    </div> --}}
                  </div>
                </div>
                  <!--like buttons-->

                  <div class='text-left sm:text-left px-5 py-4 rounded mt-5'>

                  @if(session()->has('error-message'))
                  <div class="flex p-4 mb-4 text-sm text-red-700 bg-green-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                      <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                      <div>
                        <span class="font-medium">Oops try again!</span> {{ session()->get('error-message') }}
                      </div>
                    </div> 
                  @elseif(session()->has('message'))
                  <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                      <span class="font-medium">Success!</span> {{ session()->get('message') }}
                    </div>
                  </div>
                  @endif

                  <!-- Validation Errors -->
                  <x-auth-validation-errors class="mb-4" :errors="$errors" />

                  <h3 class='text-lg font-bold m-0 p-0'>All Comments</h3>

                  <form method="post" action="{{ url('blog-content', ['id' => $current_blog_data[0]->id])}}">
                      @csrf
                  <div class="mt-3">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                    <input type="text" id="name"  value="{{old('name')}}"  name="name" placeholder="Enter Name" class="bg-gray-50 border mb-3 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                    <input type="email" id="email" value="{{old('email')}}"  name="email"  placeholder="Email" class="mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    
                    <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Comment</label>
                    <textarea
                    name='comment'
                    id="comment"
                    class=" form-control block w-full px-3 py-1.5 text-base font-normaltext-gray-700 bg-white bg-clip-padding
                    border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    "
                    id="exampleFormControlTextarea1"
                    rows="3"
                    placeholder="Enter Comment"
                    >{{old('comment')}}</textarea>
                  </div>
      
                  <div class='items-center  mt-4'>
                      <x-button class="">
                          {{ __('Comment') }}
                      </x-button>
                  </div>
                </form>
                  </div>

                </div>
              </div>

        </div>
        <!--//blog content from school-->

          <!--comments-->
          <div class="mx-auto sm:text-center md:w-1/2 px-3 py-3  rounded">
            @if(count($all_comments) > 0) 

              @foreach($all_comments as $comment_data)
              <div class='flex text-left px-3 py-3 mb-3  rounded border'>
                <div class=' w-1/2 '><p class='font-bold px-3'>{{$comment_data->name}}:</p></div>
                <div class='d-block text-left w-full'>
                  <p class=' text-lg'>{{$comment_data->comment}}</p>
                  <p class='text-sx text-gray-500'>Posted on {{ Carbon\Carbon::parse($comment_data->created_at)->format('m, Y')}}</p>
                </div>
              </div>
              @endforeach

            @else
              <p class='border px-3 py-3 text-center'> No comments</p>
            @endif
          </div>
          <!--comments-->

        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            
            <h3 class=' max-w-md mb-5 font-sans text-2xl font-bold tracking-tight'>Read more content from {{$current_blog_data[0]->school_name}} blogs</h3>
            <div class="grid gap-6 row-gap-5 mb-8 lg:grid-cols-4 sm:row-gap-6 sm:grid-cols-2">

              @foreach($other_blog_data as $data)
              <a href="{{ url('blog-content', ['id' => $data->id])}}" aria-label="View Item">
                <div class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
                  <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="{{asset('storage/'.$data->blog_image)}}" alt="blog-post-image" />
                  <div class="absolute inset-x-0 bottom-0 px-6 py-4 bg-black bg-opacity-75">
                    <p class="text-sm font-medium truncate tracking-wide text-white">
                      {{$data->blog_title}}
                    </p>
                  </div>
                </div>
              </a>
              @endforeach
           
            </div>
            <div class="text-center">
              <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                See more
                <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                  <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                </svg>
              </a>
            </div>
          </div>
    </div>
</x-guest-layout>
    