<x-master-layout>
<!-- Main Content -->
<div class="pt-8 pb-16">
    <div class="container mx-auto px-4">
        
        <!-- Profile Header -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
            <div class="bg-green-500 h-40 relative">
                <div class="absolute -bottom-16 left-8">
                    <div class="h-32 w-32 rounded-full border-4 border-white overflow-hidden bg-white">
                        <img id="profilePhotoPreview" src="{{ asset('storage/'. $touriste->photo) }}" alt="Profile photo" class="w-full h-full object-cover">
                        <label for="updatPhoto" class="absolute h-8 w-8 bottom-3 right-3 bg-green-400 text-center py-[0.2rem] rounded-full cursor-pointer" >
                            <i class="fas fa-camera text-gray-50 text-lg"></i>
                          </label>
                        <x-text-input id='updatPhoto' accept="image/*" type="file" name='photo' class="hidden" />
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
                        <h1 class="text-2xl font-bold text-green-700">{{ $touriste->getFullNameAttribute() }}</h1>
                    </div>
                    <div class="flex mt-4 md:mt-0">
                        <span class="bg-green-100 text-green-800 py-1 px-3 rounded-full text-sm mr-2">
                            <i class="fas fa-user mr-1"></i> Touriste
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
                            <p class="font-medium">{{ $touriste->formatDate('F Y') }}</p>
                        </div>
                        <div class="mr-8 mb-2">
                            <span class="text-gray-600 text-sm">Languages</span>
                            <p class="font-medium">French, Arabic, English</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Personal Information Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Left Column: Personal Info -->
            <div class="md:col-span-2">
                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    @include('touriste.profile.partials.update-information-form')
                </div>
            </div>
        </div>
    </div>
</div>

</x-master-layout>