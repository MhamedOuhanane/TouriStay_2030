<div class="bg-white rounded-lg shadow-md p-6 mb-8">
    <h2 class="text-xl font-semibold mb-4 text-green-700">Account Summary</h2>
    
    <div class="space-y-4">
        <div class="flex justify-between items-center border-b pb-3">
            <span class="text-gray-600">Account type</span>
            <span class="font-medium">Property Owner</span>
        </div>
        <div class="flex justify-between items-center border-b pb-3">
            <span class="text-gray-600">Registration date</span>
            <span class="font-medium">{{ $user->formatDate('F j, Y') }}</span>
        </div>
        <div class="flex justify-between items-center border-b pb-3">
            <span class="text-gray-600">Active listings</span>
            <span class="font-medium">{{ count($Annonces) }}</span>
        </div>
        <div class="flex justify-between items-center border-b pb-3">
            <span class="text-gray-600">Bookings received</span>
            <span class="font-medium">42</span>
        </div>
        <div class="flex justify-between items-center">
            <span class="text-gray-600">Response rate</span>
            <span class="font-medium">98%</span>
        </div>
    </div>
</div>