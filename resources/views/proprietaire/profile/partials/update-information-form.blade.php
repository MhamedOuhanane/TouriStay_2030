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

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

            <div>
                <x-input-label for="first_name" :value="__('First Name')" />
                <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $owner->first_name)" required autocomplete="first_name" />
                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
            </div>

            <div>
                <x-input-label for="last_name" :value="__('Last Name')" />
                <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name', $owner->last_name)" required autocomplete="last_name" />
                <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
            </div>

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $owner->email)" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
    
                @if ($owner instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $owner->hasVerifiedEmail())
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

            <div>
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $owner->formatPhone())" autocomplete="phone" />
                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
            </div>

            <div>
                <x-input-label for="city" :value="__('City')" />
                <x-text-input id="city" name="city" type="text" class="mt-1 block w-full" :value="old('city', $owner->city)" autocomplete="city" />
                <x-input-error class="mt-2" :messages="$errors->get('city')" />
            </div>

            <div>
                <x-input-label for="country" :value="__('Country')" />
                <select id="country" name="country" class="border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm mt-1 block w-full">
                    <option value="morocco" {{ old('country',$owner->country) == 'morocco' ? 'selected' : '' }}>Morocco</option>
                    <option value="spain" {{ old('country',$owner->country) == 'spain' ? 'selected' : '' }}>Spain</option>
                    <option value="portugal" {{ old('country',$owner->country) == 'portugal' ? 'selected' : '' }}>Portugal</option>
                    <option value="other" {{ old('country',$owner->country) == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>
        </div> 
        
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

        <div class="flex grid-cols-2 justify-end items-center gap-4">
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