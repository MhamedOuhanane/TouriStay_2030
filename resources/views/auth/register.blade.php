<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Type d'utilisateur -->
        <div class="flex justify-center self-center gap-3 mb-6">
            <label class="w-[40%]  flex-1 text-center cursor-pointer user-type-option">
                <x-text-input id="Touriste" class="block mt-1 peer sr-only" type="checkbox" name="roleName[]" :value="__('touriste')"  />
                <div class="flex border rounded-md  flex-col items-center peer-checked:border-emerald-500 peer-checked:bg-emerald-50 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto mb-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    <span class="text-sm">Touriste</span>
                </div>
            </label>
            <label  class="w-[40%]  flex-1 text-center cursor-pointer user-type-option">
                <x-text-input id="proprietaire" class="block mt-1 peer sr-only" type="checkbox" name="roleName[]" :value="__('proprietaire')"  />
                <div class="flex  border rounded-md flex-col items-center peer-checked:border-emerald-500 peer-checked:bg-emerald-50 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto mb-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                    </svg>
                    <span class="text-sm">Propriétaire</span>
                </div>
            </label>
        </div>

        <div class="flex gap-4">
            <!-- Firts Name -->
            <div>
                <x-input-label for="first_name" :value="__('First Name')" />
                <x-text-input id="first_name" class="block mt-1" type="text" name="first_name" :value="old('name')" required placeholder="first_name" autofocus autocomplete="first_name" />
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div>
                <x-input-label for="last_name" :value="__('Last Name')" />
                <x-text-input id="last_name" class="block mt-1" type="text" name="last_name" :value="old('name')" required placeholder="last_name" autofocus autocomplete="last_name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="Entrez votre email" autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required placeholder="Créez votre mot de passe" autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required placeholder="Confirmez votre mot de passe" autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <p class="text-sm">
                Vous avez déjà un compte?
                 <a href="{{ route('login') }}" id="show-login" class="text-green-500 font-medium hover:text-green-600">Connexion</a>
                </p>
            

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
