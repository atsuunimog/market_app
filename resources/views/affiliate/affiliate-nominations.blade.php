<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Referral Nominations') }}
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

        <!--notificaiton-->
        <div class='w-full px-3 py-3 bg-white rounded shadow mt-3 mx-3 mb-3'>
            <p class='text-sm text-gray-700'>
            <span class='font-bold text-red-600'>Note</span>
           : Use contact information as reference to confirm status of nominated candidates
            </p>
        </div>
        <!--notification-->

        <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1">
            <div class="">
                <!--affiliate table-->
                <table class="md:w-full sm:w-min  divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                    <tr>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    No
                    </th>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Date
                    </th>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Grade
                    </th>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Contact
                    </th>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Details
                    </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @if(count($affiliate_data) > 0)
                            @foreach($affiliate_data as $data)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration + $affiliate_data->perPage() * ($affiliate_data->currentPage() - 1) }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ Carbon\Carbon::parse($data->created_at)->format('D, d')}}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$data->class}}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$data->email}}</td>
                                <td class='py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white'><a href='' class='text-blue-700'>Details</a></td>
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
   
    @include("default_layout/footer")
    </x-app-layout>
    