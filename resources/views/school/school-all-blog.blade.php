<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('All Blogs') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-5">
    <div class="grid sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-2">
        <div>
            <div class=" my-3">
                <!--aside -->
                @include("default_layout.school_side_menu")
                <!--aside -->
            </div>
        </div>

        <div class="col-span-3">
                <div class="my-3">
                      <!--database tablle-->

                    <!--bread crumb-->
                    <nav class="flex bg-white mb-3 py-3 mt-3 px-3 rounded shadow" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ url('school-blog') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                <svg class="mr-2 w-4 h-4 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path></svg>
                                Create Blog
                            </a>
                        </li>
                        </ol>
                    </nav>
                    <!--bread crumb-->

                        @if(session()->has('message'))
                        <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                            <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            <div>
                            <span class="font-medium">Success!</span> {{ session()->get('message') }}
                            </div>
                        </div> 
                        @endif

                        <div class="flex flex-col">
                            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                            <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden">
                            <table class="md:w-full sm:w-min  divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                            No
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                            Blog Title
                            </th>
                            
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                            Blog Content
                            </th>

                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                            Upvote
                            </th>

                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                            Downvote
                            </th>

                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                             Views
                            </th>

                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                            Created
                            </th>

                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                           Updated
                            </th>

                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                               Edit
                             </th>
                             <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Delete
                             </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @foreach($all_blog_data as $data)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration + $all_blog_data->perPage() * ($all_blog_data->currentPage() - 1) }}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 dark:text-white  text-ellipsis truncate overflow-hidden">{{ $data->blog_title }}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white truncate text-ellipsis overflow-hidden">{{ $data->blog_content}}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $data->upvote }}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $data->downvote }}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $data->views }}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900  dark:text-white  overflow-hidden">{{ Carbon\Carbon::parse($data->created_at)->format('d,M,y')}}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900  dark:text-white  overflow-hidden">{{ Carbon\Carbon::parse($data->updated_at)->format('d,M,y')}}</td>
                                    <td class="text-center py-4 px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <a href="{{route('edit-school-blog', ['id' => $data->id])}}" class="text-blue-600 dark:text-blue-500 hover:underline">
                                            <i class="icon ion-edit text-dark"></i>
                                        </a>
                                    </td>
                                    <td class="text-center py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <a onclick="confirmDelete()" href="{{route('delete-school-blog', ['id' => $data->id])}}" class="text-blue-600 dark:text-blue-500 hover:underline">
                                            <i class="icon ion-trash-b text-dark"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            </table>
                            
                            </div>
                            </div>
                            </div>
                            </div>
                      <!--databse table-->
                      <div class="my-5">
                      {{$all_blog_data->links()}}
                      </div>
                </div>
        </div>
    </div>
</div>  
@include("default_layout/footer")
</x-app-layout>
