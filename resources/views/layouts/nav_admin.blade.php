<!-- Top Navigation -->
<header class="bg-white shadow-sm">
    <div class="flex items-center justify-between p-4">
        <button class="md:hidden text-gray-600">
            <i class="fas fa-bars text-xl"></i>
        </button>
        <div class="flex items-center ml-auto">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div class="flex items-center">
                            <img src="{{ asset('storage/'. Auth::user()->photo) }}" class="h-8 w-8 rounded-full mr-2" alt="Avatar">
                            <span>{{ Auth::user()->getFullNameAttribute() }}</span>
                        </div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    @php
                        $roles = Auth::user()->roles;
                    @endphp

                    @foreach ($roles as $role)
                        <x-dropdown-link :href="route('session.role', ['role' => $role->name])" 
                            class="{{ $role->name == session('role') ? 'text-green-600' : '' }}">
                            {{ __($role->name) }}
                        </x-dropdown-link>
                    @endforeach

                    <hr class="w-[90%] ml-2">
                    <x-dropdown-link :href="route('owner.profile')">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</header>