<!-- Sidebar -->
<aside class="bg-green-700 text-white w-64 hidden md:block">
    <div class="p-6">
        <h2 class="text-2xl font-bold text-emerald-300">Touristay 2030</h2>
        <p class="text-blue-300 text-sm">Panneau d'administration</p>
    </div>
    <nav class="mt-6">
        <div class="px-4">
            <div class="{{ request()->routeIs('admine.dashboard') ? 'bg-emerald-800' : 'hover:bg-emerald-800'}} rounded-lg p-3 mb-3">
                <a href="{{ route('admine.dashboard') }}" class="flex items-center">
                    <i class="fas fa-chart-pie mr-3"></i>
                    <span>Tableau de bord</span>
                </a>
            </div>
            <a href="{{ route('annonce.admin') }}" class="flex items-center p-3 {{ request()->routeIs('annonce.admin') ? 'bg-emerald-800' : 'hover:bg-emerald-800'}} rounded-lg mb-3">
                <i class="fas fa-hotel mr-3"></i>
                <span>Hébergements</span>
            </a>
            <a href="{{ route('utilisateurs.admin') }}" class="flex items-center p-3 {{ request()->routeIs('utilisateurs.admin') ? 'bg-emerald-800' : 'hover:bg-emerald-800'}} rounded-lg mb-3">
                <i class="fas fa-users mr-3"></i>
                <span>Utilisateurs</span>
            </a>
            <a href="{{ route('reservations.admin') }}" class="flex {{ request()->routeIs('reservations.admin') ? 'bg-emerald-800' : 'hover:bg-emerald-800'  }} items-center p-3 rounded-lg mb-3">
                <i class="fas fa-calendar-check mr-3"></i>
                <span>Réservations</span>
            </a>
        </div>
    </nav>
    
    
</aside>