<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Property') }}
        </h2>
    </x-slot>

    <main class="p-8">
        <div class="bg-white rounded-lg shadow-xl w-full pb-8">
            <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                <h3 id="modalTitle" class="text-lg font-medium text-gray-900">Add New Property</h3>
                <button id="closeModal" class="text-gray-400 hover:text-gray-500">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <form method="post" action="{{ route('dashboard.store') }}" enctype="multipart/form-data" class="my-4 px-10 space-y-6">
                @csrf

                <input type="hidden" id="property_id" name="property_id">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mb-6">
                    <div>
                        <x-input-label for="location" :value="__('City')" />
                        <x-text-input type="text" id="location" name="location" class="mt-1 block w-full" required autocomplete="location" placeholder="Enter city name"/>
                        <x-input-error class="mt-2" :messages="$errors->get('location')" />
                    </div>
                    
                    <div>
                        <x-input-label for="country" :value="__('Country')" />
                        <select id="country" name="Country" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200">
                            <option value="" disabled selected>Select a country</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Spain">Spain</option>
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('Country')" />
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mb-6">
                    <div>
                        <x-input-label for="prix" :value="__('Price (per night)')"/>       
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <span class="text-gray-500">$</span>
                            </div>
                            <x-text-input type="number" id="prix" name="prix" step="0.01" min="0" class="pl-6 mt-1 block w-full" required autocomplete="prix" placeholder="0.00"/>
                            <x-input-error class="mt-2" :messages="$errors->get('prix')" />
                        </div>
                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="photo" class="block text-sm font-medium text-gray-700 mb-1">Property Photos</label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                        <input type="file" id="photo" name="photo" accept="image/*" class="hidden">
                        <label for="photo" class="cursor-pointer block">
                            <i class="fas fa-cloud-upload-alt text-gray-400 text-3xl mb-2"></i>
                            <span class="text-sm text-gray-500">Click to upload or drag and drop</span>
                        </label>
                        <div id="photoPreview" class="mt-4 hidden">
                            <img id="photoPreviewImg" src="" alt="Property preview" class="h-32 mx-auto object-cover rounded">
                        </div>
                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea id="description" name="description" rows="2" required class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200" placeholder="Describe your property..."></textarea>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <x-input-label for="start_date" :value="__('Start Date')" />            
                        <x-text-input type="date" id="start_date" name="start_date" class="mt-1 block w-full" required autocomplete="start_date" />
                        <x-input-error class="mt-2" :messages="$errors->get('start_date')" />
                    </div>
                    
                    <div>
                        <x-input-label for="end_date" :value="__('End Date')" />            
                        <x-text-input type="date" id="end_date" name="end_date" class="mt-1 block w-full" required autocomplete="end_date" />
                        <x-input-error class="mt-2" :messages="$errors->get('end_date')" />
                    </div>
                </div>
                
                <div class="flex justify-end pt-4 border-t border-gray-200">
                    <a href="{{ route('dashboard.store') }}" id="cancelBtn" class="bg-white text-gray-700 font-medium py-2 px-4 border border-gray-300 rounded-lg mr-2 hover:bg-gray-50 focus:ring focus:ring-gray-200 transition">
                        Cancel
                    </a>
                    <x-primary-button class="bg-blue-500">{{ __('Save Property') }}</x-primary-button>
                </div>
            </form>
        </div>
    </main>
</x-app-layout>