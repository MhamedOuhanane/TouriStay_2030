 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    
    <!-- Main Content -->
    <main class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Properties Management Section -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                    <h2 class="text-lg font-medium text-gray-900">
                        My Properties
                    </h2>
                    <a href="{{ route('annonce.create') }}" id="addNewPropertyBtn" class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-lg transition flex items-center">
                        <i class="fas fa-plus mr-2"></i> Add New Property
                    </a>
                </div>
                
                
                <!-- Properties Listing Table -->
                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Property
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Location
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Price/Night
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Availability
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Property Row 1 -->
                                @foreach ($Annonces as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $item->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="h-10 w-10 flex-shrink-0 rounded-md overflow-hidden">
                                                    <img src="{{ asset('storage/'. $item->photo) }}" alt="Property image" class="h-10 w-10 object-cover">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 truncate max-w-xs">{{ $item->title }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $item->location }}, {{ $item->country }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">${{ $item->prix }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $item->formatDate($item->start_date, 'F j') }} - {{ $item->formatDate($item->end_date, 'F j') }}, 2030</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $colour[$item->status] }}">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                        @if (count($item->reservations) == 0 && $item->status == 'En Attente')
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <div class="flex space-x-2">
                                                    <form action="{{ route('annonce.edit') }}" method="get">
                                                        @csrf
                                                        <input type="text" name="id" value="{{ $item->id }}" class="hidden">
                                                        <button type="submit" class="edit-btn text-blue-600 hover:text-blue-900">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </form>

                                                    <form action="{{ route('annonce.SoftDelete') }}" method="POST">
                                                        @csrf   
                                                        @method('delete')
                                                        <input type="text" name="id" value="{{ $item->id }}" class="hidden">
                                                        @if (!$item->soft_delete)
                                                            <button type="submit" class="soft-delete-btn text-red-600 hover:text-red-900">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        @else
                                                            <button type="submit" class="soft-delete-btn text-green-600 hover:text-green-900">
                                                                <i class="fas fa-refresh"></i>
                                                            </button>
                                                        @endif
                                                    </form>
                                                </div>
                                            </td>
                                        @else
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $colour[$item->status] }}">
                                                {{ $item->status }}
                                            </span>
                                        @endif
                                    </tr>
                                        
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md p-6">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Confirm Deletion</h3>
        <p class="text-gray-500 mb-6">Are you sure you want to delete this property? This action cannot be undone.</p>
        <input type="hidden" id="delete_property_id">
        <div class="flex justify-end">
            <button id="cancelDelete" class="bg-white text-gray-700 font-medium py-2 px-4 border border-gray-300 rounded-lg mr-2 hover:bg-gray-50 transition">
                Cancel
            </button>
            <button id="confirmDelete" class="bg-red-500 text-white font-medium py-2 px-4 rounded-lg hover:bg-red-600 transition">
                Delete
            </button>
        </div>
    </div>
</div>

<script>
    // DOM Elements
    // const addNewPropertyBtn = document.getElementById('addNewPropertyBtn');
    const propertyModal = document.getElementById('propertyModal');
    // const closeModal = document.getElementById('closeModal');
    // const cancelBtn = document.getElementById('cancelBtn');
    const propertyForm = document.getElementById('propertyForm');
    const photoInput = document.getElementById('photo');
    const photoPreview = document.getElementById('photoPreview');
    const photoPreviewImg = document.getElementById('photoPreviewImg');
    const modalTitle = document.getElementById('modalTitle');
    const deleteModal = document.getElementById('deleteModal');
    // const cancelDelete = document.getElementById('cancelDelete');
    // const confirmDelete = document.getElementById('confirmDelete');
    const deletePropertyId = document.getElementById('delete_property_id');
    const editButtons = document.querySelectorAll('.edit-btn');

    // Open add property modal
    addNewPropertyBtn.addEventListener('click', () => {
        
        document.getElementById('property_id').value = '';
        photoPreview.classList.add('hidden');
        modalTitle.textContent = 'Add New Property';
        propertyModal.classList.remove('hidden');
    });

    // Close property modal
    closeModal.addEventListener('click', () => {
        propertyModal.classList.add('hidden');
        propertyForm.reset();
    });

    cancelBtn.addEventListener('click', () => {
        propertyModal.classList.add('hidden');
        propertyForm.reset();
    });

    // Cancel deletion
    cancelDelete.addEventListener('click', () => {
        deleteModal.classList.add('hidden');
    });

    // Confirm deletion
    confirmDelete.addEventListener('click', () => {
        const propertyId = deletePropertyId.value;
        
        // Here you would normally handle the deletion with AJAX
        alert(`Property ${propertyId} has been deleted`);
        
        deleteModal.classList.add('hidden');
    });
</script>

</x-app-layout>
