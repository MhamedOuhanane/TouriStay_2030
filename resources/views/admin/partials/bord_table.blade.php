<h1 class="text-2xl font-bold text-gray-800 mb-6">Tableau de bord</h1>
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="bg-blue-100 p-3 rounded-full">
                <i class="fas fa-users text-blue-600"></i>
            </div>
            <div class="ml-4">
                <h3 class="text-gray-500 text-sm">Utilisateurs</h3>
                <p class="text-2xl font-bold">{{ count($Users) }}</p>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="bg-green-100 p-3 rounded-full">
                <i class="fas fa-hotel text-green-600"></i>
            </div>
            <div class="ml-4">
                <h3 class="text-gray-500 text-sm">Réservations</h3>
                <p class="text-2xl font-bold">{{ count($Reservations) }}</p>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="bg-purple-100 p-3 rounded-full">
                <i class="fas fa-credit-card text-purple-600"></i>
            </div>
            <div class="ml-4">
                <h3 class="text-gray-500 text-sm">Revenus</h3>
                <p class="text-2xl font-bold">{{ $totalRevenus }} MAD</p>
            </div>
        </div>
    </div>
</div>