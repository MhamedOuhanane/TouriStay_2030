{{-- <section> --}}
    {{-- <h2 class="text-xl font-semibold mb-6 text-green-700">Personal Information</h2> --}}
                        
    {{-- <form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="firstname" class="block text-gray-700 text-sm font-medium mb-2">First Name</label>
                <input type="text" id="firstname" value="Mohammed" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label for="lastname" class="block text-gray-700 text-sm font-medium mb-2">Last Name</label>
                <input type="text" id="lastname" value="Rachidi" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                <input type="email" id="email" value="m.rachidi@example.com" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">Phone</label>
                <input type="tel" id="phone" value="+212 6xx-xxxxxx" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label for="city" class="block text-gray-700 text-sm font-medium mb-2">City</label>
                <input type="text" id="city" value="Casablanca" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label for="country" class="block text-gray-700 text-sm font-medium mb-2">Country</label>
                <select id="country" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="morocco" selected>Morocco</option>
                    <option value="spain">Spain</option>
                    <option value="portugal">Portugal</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div> --}}
        
        {{-- <div class="mb-6">
            <label for="languages" class="block text-gray-700 text-sm font-medium mb-2">Languages spoken</label>
            <div class="flex flex-wrap gap-2">
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm flex items-center">
                    French
                    <button class="ml-2 text-green-800 hover:text-green-600">
                        <i class="fas fa-times"></i>
                    </button>
                </span>
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm flex items-center">
                    Arabic
                    <button class="ml-2 text-green-800 hover:text-green-600">
                        <i class="fas fa-times"></i>
                    </button>
                </span>
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm flex items-center">
                    English
                    <button class="ml-2 text-green-800 hover:text-green-600">
                        <i class="fas fa-times"></i>
                    </button>
                </span>
                <button class="bg-white border border-green-500 text-green-500 px-3 py-1 rounded-full text-sm hover:bg-green-100">
                    <i class="fas fa-plus mr-1"></i> Add
                </button>
            </div>
        </div> --}}
        
        {{-- <div class="flex justify-end">
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-6 rounded-lg transition">
                Save changes
            </button>
        </div> --}}
    {{-- </form> --}}
{{-- </section> --}}

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('owner.profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>