<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Main Content -->
    <div class="pt-8 pb-16">
        <div class="container mx-auto px-4">
            
            <!-- Profile Header -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
                <div class="bg-green-500 h-40 relative">
                    <div class="absolute -bottom-16 left-8">
                        <div class="h-32 w-32 rounded-full border-4 border-white overflow-hidden bg-white">
                            <img src="{{ asset('storage/'. $user->photo) }}" alt="Profile photo" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    {{-- <div class="absolute top-4 right-4">
                        <button class="bg-white hover:bg-gray-100 text-green-600 font-medium py-2 px-4 rounded-lg shadow transition">
                            <i class="fas fa-edit mr-2"></i>Edit profile
                        </button>
                    </div> --}}
                </div>
                
                <div class="pt-20 pb-6 px-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                        <div>
                            <h1 class="text-2xl font-bold text-green-700">{{ $user->getFullNameAttribute() }}</h1>
                            <p class="text-gray-600"><i class="fas fa-map-marker-alt mr-2"></i>{{ $user->city }},{{ $user->country }}</p>
                        </div>
                        <div class="flex mt-4 md:mt-0">
                            <span class="bg-green-100 text-green-800 py-1 px-3 rounded-full text-sm mr-2">
                                <i class="fas fa-home mr-1"></i> Property Owner
                            </span>
                            <span class="bg-red-400 text-white py-1 px-3 rounded-full text-sm">
                                <i class="fas fa-check-circle mr-1"></i> Verified
                            </span>
                        </div>
                    </div>
                    
                    <div class="border-t pt-4 mt-4">
                        <div class="flex flex-wrap">
                            <div class="mr-8 mb-2">
                                <span class="text-gray-600 text-sm">Member since</span>
                                <p class="font-medium">{{ $user->formatDate('F Y') }}</p>
                            </div>
                            <div class="mr-8 mb-2">
                                <span class="text-gray-600 text-sm">Languages</span>
                                <p class="font-medium">French, Arabic, English</p>
                            </div>
                            <div class="mr-8 mb-2">
                                <span class="text-gray-600 text-sm">Average rating</span>
                                <p class="font-medium flex items-center">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i> 4.8 (23 reviews)
                                </p>
                            </div>
                            <div class="mb-2">
                                <span class="text-gray-600 text-sm">Active listings</span>
                                <p class="font-medium">{{ count($Annonces) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- <!-- Profile Navigation -->
            <div class="bg-white rounded-lg shadow-md mb-8">
                @include('profile.partials.navigation-profile-proprety-owner')
            </div> --}}
            
            <!-- Personal Information Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Left Column: Personal Info -->
                <div class="md:col-span-2">
                    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                        @include('proprietaire.profile.partials.update-information-form')
                    </div>
                    
                    <!-- Identity Verification -->
                    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                        @include('proprietaire.profile.partials.identity-verification')
                    </div>
                </div>
                
                <!-- Right Column: Account Stats & Preferences -->
                <div>
                    <!-- Account Summary Card -->
                    @include('proprietaire.profile.partials.account-summary')
                    
                    <!-- Notifications Preferences -->
                    @include('proprietaire.profile.partials.notification-preferences')
                    
                    <!-- Help & Support -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        @include('proprietaire.profile.partials.help-support')
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>