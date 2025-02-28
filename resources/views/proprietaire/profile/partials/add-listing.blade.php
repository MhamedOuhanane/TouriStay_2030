<div class="bg-white rounded-lg shadow-xl w-full max-w-3xl">
    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <h3 id="modalTitle" class="text-lg font-medium text-gray-900">Add New Property</h3>
        <button id="closeModal" class="text-gray-400 hover:text-gray-500">
            <i class="fas fa-times text-xl"></i>
        </button>
    </div>
    
    <form id="propertyForm" class="p-6">
        <input type="hidden" id="property_id" name="property_id">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Location</label>
                <input type="text" id="location" name="location" required class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200" placeholder="City, Country">
            </div>
            
            <div>
                <label for="prix" class="block text-sm font-medium text-gray-700 mb-1">Price (per night)</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <span class="text-gray-500">$</span>
                    </div>
                    <input type="number" id="prix" name="prix" step="0.01" min="0" required class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 pl-7" placeholder="0.00">
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
            <textarea id="description" name="description" rows="4" required class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200" placeholder="Describe your property..."></textarea>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">Available From</label>
                <input type="date" id="start_date" name="start_date" required class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200">
            </div>
            
            <div>
                <label for="end_date" class="block text-sm font-medium text-gray-700 mb-1">Available To</label>
                <input type="date" id="end_date" name="end_date" required class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200">
            </div>
        </div>
        
        <div class="flex justify-end pt-4 border-t border-gray-200">
            <button type="button" id="cancelBtn" class="bg-white text-gray-700 font-medium py-2 px-4 border border-gray-300 rounded-lg mr-2 hover:bg-gray-50 transition">
                Cancel
            </button>
            <button type="submit" class="bg-green-500 text-white font-medium py-2 px-4 rounded-lg hover:bg-green-600 transition">
                Save Property
            </button>
        </div>
    </form>
</div>