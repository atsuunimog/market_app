<x-guest-layout>   
  <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
    <div class="max-w-xl md:mx-auto sm:text-center pt-5 pb-3">
        <img class="object-cover shadow overflow-hidden rounded-full mx-auto  w-20 h-20" 
        src="{{isset($profile_info[0]->logo_img)?asset('storage/'.$profile_info[0]->logo_img) : asset('storage/school_logo.png')  }}" 
        alt="school-logo" />
    </div>
  </div>

    <div class="px-4 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
              All Events
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
           {{$profile_info[0]->school_name}}
          </h2>
         
        </div>


@foreach ($all_events as $data)
<div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
  <div class="max-w-xl mb-3 md:mx-auto sm:text-center lg:max-w-2xl">
  <div class="flex border px-3 py-3 rounded">
      <div class='px-4'>
        <img class='block mx-auto' src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAEYUlEQVRoge2Xz24cRRDGfzXjbAwr5wGQIw5ceAIEAq4gceaChDj6BSIh8QDwDj4ihPICSHkCFAlzCQhOIBScILhBsolW9swUh9merv67O7YiOGwf7HZPTfX3ffV19Rj2Yz/2Y+fx7verL945W63ePnv6+f8ldzMnWJU7wFKQO7PQvcDcB8Unn/3wAb2eig7HdBew/ts+vdmcfKOyOIL2AHRAVEF1nOPnqG6eDYCZu/X+AtZPg9wvfXiqslhC04DqI9CT519/fC8Hs1yBgVPQ4+lv1eCx+AdmVc0vNXHpejAyS6Bu/Vh0OC3BrFjIgM/vYDdJYzKvSLJeyTtNFZDbJZRlAhqpJ4L2AwBDP2BrIAmOkuKFdVGfu+sR8fEp6V0J2BebFpqWxz+e01/2/PHg99GfTesDHc8YcLZC6kmLgLT8efYz/UXHX9/9BNJiWFQZSPHJpw9UNocNFLlcw+Uz6HsQQQ4Oob1xvQPs1rsLuHwOQwc0SLvYNAcf9+zuJ1ms5S4U+/BgMSo+dAgyctchjd/5AJv19gbIEgaTb2oaFf+w0z1gNhKB5gCkqQPb6QDbV3TM2bSItY7WwUOlAq+/+QqqOuFTVecmMx9/6yZomk/ryuQoOye3nsmPmd/N4yxWQNkGfhRUXXQCnhAwLr5ASqN9CfcqjWobxWyCAeI2woDEgHfMbQNy5JL5tJnNE+1bsVK5AoEqNeU8EH/sChUzgD3PtHpeMEzWmQQmKIEqkFUOs55TcYJMFKPh3AoQk5tLoHioDOC87526xvc565iSheTy1pxNIElOObnP7w9+yfcet3psJWtaweYSiJUrJc+Ti4gm5DQVwFR4+mkEmE1gq+8T6+SU87H5Qx35PsgT5Z9LwLYuL2JBOdWoGoZ0PDeAXfJs9ey+lRJUu1D2sskpZ4AkKhL5PlcxNy8c/CtWwDEwc6tFSTkDxOchXz2fyr1YrN5sAng8TCqWfG+VM0Cy1TP0shVz+e2+Zfzlj7kX8qkwdOh6xdAP2epp08Li5fEfmqhiswkkKlLqGFt8byqm6xX3PnqNN24fZbe8//AJ7335CxzeCslVRv0MWP1yXg86xnbfD91QBA/w1qu30L7HdTVvtSsQIOgYW3wfeD3yfURu+yhceHMJ5DvG1T+R7SVXhZ+z5pXuAe+UTeKy71Ny5U+F7QxCouoVmUfAHcCwC2WSu7AsuczB35VHZMfZBBIVo+RZ65ig0qfCLshDwai+WK/ABojLUbx4pvj6pwJtw/2HT4pgvv3tH1Tayfe7dKEt94AaJcw8oEfq9cj3jpwslrz/1a/Qdf5+mpqEjhfYzaX3vd13LoFc91AHOahA2jES37t4aZHDo0lRyZAu/b9dGvV7ICG0g+9zFQsuPJ8wf+H5ik0/Kx7aeg9c6xPZyDDirFSP+LxF5OYSQHl07U/kUsWMJX3OtGKOqMD5bAI9nADnqe8jFYl8X+pU3juFg58jpwica6MnJZz7sR/7sR//7fgXffRKh9jUaqsAAAAASUVORK5CYII="/>
        <p class='my-1'>{{$data->event_date}}</p>
      </div>
      <div class='w-full text-left px-4'>
        <h3 class='font-bold text-lg'>{{$data->event_title}}</h3>
        <p>{{$data->event_details}}</p>
      </div>
  </div>
</div>
</div>
@endforeach
<div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
  <div class="max-w-xl md:mx-auto sm:text-center py-5">
  <div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
  {{$all_events->links()}}
</div>
</div>
</div>
</x-guest-layout>
    
    