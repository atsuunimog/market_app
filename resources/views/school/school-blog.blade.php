<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-black leading-tight">
{{ __('Blog') }}
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
<div class="sm:col-span-3 md:col-span-3 lg:col-span-3">

<!--bread crumb-->

<nav class="flex bg-white mb-3 py-3 mt-3 px-3 rounded shadow" aria-label="Breadcrumb">
<ol class="inline-flex items-center space-x-1 md:space-x-3">
<li class="inline-flex items-center">
    <a href="{{ url("school-all-blog") }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
<svg class="mr-2 w-4 h-4 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    See all Blogs
    </a>
</li>
</ol>
</nav>

<div class="my-3">
<!--2 part grid-->
<div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2">
    <div>
        <!--form--holder-->
        <div class=" rounded shadow px-3 py-3 bg-white">
            <!--profile form-->
            <div class="px-3 pb-3 mb-3">
                <h3 class="max-w-lg mb-3 pt-3 font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl md:mx-auto">
                Create Blog
                </h3>
                <hr class="my-3">

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                @if(session()->has('message'))
                <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                        <span class="font-medium">Success!</span> {{ session()->get('message') }}
                    </div>
                    </div> 
                @elseif(session()->has('error-message'))
                <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                        <span class="font-medium">Oops!</span> {{ session()->get('error-message') }}
                    </div>
                    </div>
                @endif

                <form method="POST" action="{{url('submit-blog-post')}}" enctype="multipart/form-data">
                    @csrf
                <div class="w-full">
                    <!--image upload-->
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload Blog Image </label>
                    <input name='blog_image' class="block w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Add a blog image for every post</div>
                    <!--//image upload-->
                </div>

                <!-- Amount -->
                <div class="mt-4">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blog Title</label>
                    <input type="text"  name="blog_title" id="password" value="{{ isset($editable_data[0]->blog_title)? $editable_data[0]->blog_title :  old('blog_title') }}" placeholder="Enter a Title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                
                <label class="block my-2 text-sm font-medium text-gray-900 dark:text-gray-400">Blog Content</label>
                <textarea  rows="4" name="blog_content"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 
                focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                placeholder="About the school...">{{ isset($editable_data[0]->blog_content)? $editable_data[0]->blog_content: old('blog_content')  }}</textarea>
                
                <input type="hidden" value="{{Auth::user()->school_name}}" name="school_name" placeholder="Enter School Branch" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                <input type="hidden" value="{{ isset($editable_data[0]->blog_image)? $editable_data[0]->blog_image : old('edit_blog_image') }}" name="edit_blog_image">
                <input type="hidden" value="{{ isset($editable_data[0]->id)? $editable_data[0]->id : old('edit_blog_id') }}" name="edit_blog_id">

                <div class='items-center  mt-4'>
                    @if(isset($editable_data[0]->id))
                    <x-button class="w-full">
                        {{ __('Update Blog Post') }}
                    </x-button>
                    @else
                    <x-button class="w-full">
                        {{ __('Create Blog Post') }}
                    </x-button>
                    @endif
                </div>

                </form>
            </div>
            <!--//profile form-->
        </div>
        <!--form--holder-->
    </div>
    <div>
        <!--edit--holder--->
        <div class="rounded shadow px-3 py-3 bg-white">
            <!--scholarship data-->
            <div class="px-3">
                <div class="px-3 pb-3 mb-3">
                    <h3 class="max-w-lg mb-3 pt-3 font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-2xl md:mx-auto">
                    Blog Details
                    </h3>
                    <hr class="my-3">
                    <h1 class="sm:text-4xl font-bold">{{ isset($count_blog_post)? $count_blog_post : ""}}</h1>
                    <p class='text-gray-500 text-sm'>Total Number of Blogs Created</p>
                </div>
            </div>
            <!--scholarship data-->
        </div>
        <!--edit--holder-->
    </div>
</div>
<!--2 part grid-->
</div>
</div>
</div>
</div>

@include("default_layout/footer")
</x-app-layout>
