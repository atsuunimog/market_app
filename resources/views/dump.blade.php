
              <!--nomination form-->
              <x-auth-validation-errors class="mb-4" :errors="$errors" />
              <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="grid grid-cols-2 gap-2">
                      <!-- Name -->
                      <div>
                          <x-label for="name" :value="__('Child First Name')" />
                          <x-input id="name" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
                      </div>
                      <!-- Email Address -->
                      <div>
                          <x-label for="email" :value="__('Child Last Name')" />
                          <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                      </div>
                  </div>

                  <div class="grid grid-cols-2 gap-2 mt-4">
                    <!-- Name -->
                    <div>
                        <x-label for="date" :value="__('Child Age')" />
                        <x-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('username')" required autofocus />
                    </div>
                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Address')" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-2 mt-4">
                  <!-- Name -->
                  <div>
                      <x-label for="name" :value="__('Parent First Name')" />
                      <x-input id="name" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
                  </div>
                  <!-- Email Address -->
                  <div>
                      <x-label for="email" :value="__('Parent Last Name')" />
                      <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                  </div>
              </div>
                
                <div class="grid grid-cols-2 gap-2 mt-4">
                  <!-- Name -->
                  <div>
                      <x-label for="date" :value="__('Phone Number')" />
                      <x-input id="date" class="block mt-1 w-full" type="text" name="date" :value="old('username')" required autofocus />
                  </div>
                  <!-- Email Address -->
                  <div>
                      <x-label for="email" :value="__('WhatsApp Phone Number')" />
                      <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                  </div>
              </div>

                  <div class='items-center  mt-4'>
                      <x-button class="w-full">
                          {{ __('Send Nomination') }}
                      </x-button>
                  </div>
              </form>