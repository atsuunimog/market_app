<x-app-layout>

    <style>
        .click-alert-trans {
        display: block;
        -webkit-animation: fadeinout 4s linear forwards;
        animation: fadeinout 4s linear forwards;
        }

        @-webkit-keyframes fadeinout {
        0%,100% { opacity: 0; }
        50% { opacity: 1; }
        }

        @keyframes fadeinout {
        0%,100% { opacity: 0; }
        50% { opacity: 1; }
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Affiliate Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-5">
    <div class="grid sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-2">
        <div>
            <div class=" my-3">
                <!--aside -->
                @include("default_layout.affiliate_side_menu")
                <!--aside -->
            </div>
        </div>
        
        <div class="sm:col-span-3 md:col-span-3 lg:col-span-3">

        @if(Auth::user()->email_verified_at == null)
        <!--authentication alert-->
        <div id="alert-border-2" class="hidden flex p-4 mt-3 border-t-4 border-red-500 bg-yellow-100  dark:bg-yellow-200" role="alert">
            <svg class="inline-block flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 inline-block text-sm font-medium text-red-700">
                <span class="font-semibold hover:text-red-800">A confirmation mail has been sent to you
                <a href='' class="text-blue-700 underline ml-1">{{__('Resend link')}}</a>
                </span>
            </div>
        </div>
        <!--authentication alert-->
        @endif

        @if(!$access)

        <div id="alert-border-2" class="flex p-4 mt-4 bg-red-100 border-t-4 border-red-500 dark:bg-red-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-sm font-medium text-red-700">
              Update your profile <a href="{{ url('affiliate-profile') }}" class="font-bold  hover:text-red-800">here </a>to see all scholarship
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 dark:bg-red-200 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 dark:hover:bg-red-300 inline-flex h-8 w-8"  data-collapse-toggle="alert-border-2" aria-label="Close">
              <span class="sr-only">Dismiss</span>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>

        @endif

        <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1">
            <div class="my-3 overflow-hidden">
                <!--affiliate table-->
                <table class="md:w-full sm:w-min  divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                    <tr>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                   No
                    </th>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                   Title
                    </th>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                   Location
                    </th>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Grade
                    </th>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Commission
                    </th>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Copy Link
                     </th>
                     <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    visit Link
                      </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                    @if($access)

                    @if(count($all_scholarship) > 0)
                        <p class='px-3 py-3 bg-white rounded shadow mb-3 text-sm text-gray-700'>Available scholarships 
                            <span class='font-bold'>
                            {{count($all_scholarship)}}
                            </span>
                        </p>
                    @else
                        <p class='px-3 py-3 bg-white rounded shadow mb-3 text-sm text-gray-700'>There no available scholarships</p>
                    @endif

                    @foreach($all_scholarship as $data)
                    <tr>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration + $all_scholarship->perPage() * ($all_scholarship->currentPage() - 1) }}</td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white truncate">{{$data->title}}</td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$data->location}}</td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$data->grade}}</td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">₦{{$data->commission}}</td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"><a onclick="copyToClickBoard(this)" href='{{ url('nominate-candidate', ['post_id' => $data->id, 'affiliate_id' => $code]) }}' class='text-black focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 bg-yellow-200 rl'><i class='icon ion-ios-copy-outline text-black'></i></a></td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"><a href='{{ url('nominate-candidate', ['post_id' => $data->id, 'affiliate_id' => $code]) }}' class='text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'><i class='icon ion-android-arrow-forward text-white'></i></a></td>
                    </tr>
                    @endforeach

                    @endif

                    </tbody>
                </table>
                <!--affiliate table-->
            </div>
        </div>

    

      </div>
    </div>
    </div>

    <div id='click-alert' class="fixed bottom-10 right-10 bg-red-600 px-5 py-3 hidden">
        <span class='text-white'>Copied to Clipboard</span>
    </div>

   <script>
       function copyToClickBoard(obj){
            event.preventDefault();
            navigator.clipboard.writeText(obj.href);
            document.getElementById("click-alert").classList.toggle('click-alert-trans');
       }
   </script>
    @include("default_layout/footer")
    </x-app-layout>
    