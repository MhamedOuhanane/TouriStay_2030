<x-dashbord>
    <div class="flex h-screen overflow-hidden">

            <!-- Dashboard Content -->
            <main class="p-6">
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
                                <p class="text-2xl font-bold">15,842</p>
                                <p class="text-green-500 text-sm"><i class="fas fa-arrow-up"></i> 12.5%</p>
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
                                <p class="text-2xl font-bold">2,845</p>
                                <p class="text-green-500 text-sm"><i class="fas fa-arrow-up"></i> 8.3%</p>
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
                                <p class="text-2xl font-bold">487,290€</p>
                                <p class="text-green-500 text-sm"><i class="fas fa-arrow-up"></i> 15.2%</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="bg-yellow-100 p-3 rounded-full">
                                <i class="fas fa-star text-yellow-600"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm">Note moyenne</h3>
                                <p class="text-2xl font-bold">4.8/5</p>
                                <p class="text-green-500 text-sm"><i class="fas fa-arrow-up"></i> 3.1%</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Charts Row -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <!-- Revenue Chart -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-bold text-lg">Revenus Mensuels</h3>
                            <div class="text-sm text-gray-500">
                                <select class="border rounded p-1">
                                    <option>Cette année</option>
                                    <option>Année dernière</option>
                                </select>
                            </div>
                        </div>
                        <div class="h-64">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                    
                    <!-- Bookings Chart -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-bold text-lg">Réservations</h3>
                            <div class="text-sm text-gray-500">
                                <select class="border rounded p-1">
                                    <option>6 derniers mois</option>
                                    <option>12 derniers mois</option>
                                </select>
                            </div>
                        </div>
                        <div class="h-64">
                            <canvas id="bookingsChart"></canvas>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom Charts Row -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Destinations -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="font-bold text-lg mb-4">Destinations Populaires</h3>
                        <div class="h-64">
                            <canvas id="destinationsChart"></canvas>
                        </div>
                    </div>
                    
                    <!-- User Demographics -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="font-bold text-lg mb-4">Démographie Utilisateurs</h3>
                        <div class="h-64">
                            <canvas id="demographicsChart"></canvas>
                        </div>
                    </div>
                    
                    <!-- Recent Reviews -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="font-bold text-lg mb-4">Avis Récents</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <img src="https://randomuser.me/api/portraits/women/24.jpg" class="h-10 w-10 rounded-full" alt="User">
                                <div class="ml-3">
                                    <div class="flex items-center">
                                        <p class="font-bold text-sm">Sophie Martin</p>
                                        <div class="text-yellow-500 ml-2 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-600">Un séjour incroyable, service impeccable !</p>
                                    <p class="text-xs text-gray-400">Il y a 2 heures</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <img src="https://randomuser.me/api/portraits/men/46.jpg" class="h-10 w-10 rounded-full" alt="User">
                                <div class="ml-3">
                                    <div class="flex items-center">
                                        <p class="font-bold text-sm">Thomas Dubois</p>
                                        <div class="text-yellow-500 ml-2 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-600">Très belle destination, mais wifi à améliorer.</p>
                                    <p class="text-xs text-gray-400">Il y a 5 heures</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" class="h-10 w-10 rounded-full" alt="User">
                                <div class="ml-3">
                                    <div class="flex items-center">
                                        <p class="font-bold text-sm">Emma Petit</p>
                                        <div class="text-yellow-500 ml-2 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-600">Paysages magnifiques et personnel chaleureux.</p>
                                    <p class="text-xs text-gray-400">Il y a 1 jour</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Revenue Chart
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
                datasets: [{
                    label: 'Revenus (€)',
                    data: [35000, 42000, 38000, 45000, 52000, 78000, 92000, 98000, 85000, 68000, 55000, 63000],
                    borderColor: 'rgb(59, 130, 246)',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    tension: 0.3,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // Bookings Chart
        const bookingsCtx = document.getElementById('bookingsChart').getContext('2d');
        const bookingsChart = new Chart(bookingsCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                datasets: [{
                    label: 'Réservations',
                    data: [210, 245, 230, 280, 330, 410],
                    backgroundColor: 'rgb(16, 185, 129)',
                    borderRadius: 5
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // Destinations Chart
        const destinationsCtx = document.getElementById('destinationsChart').getContext('2d');
        const destinationsChart = new Chart(destinationsCtx, {
            type: 'pie',
            data: {
                labels: ['Paris', 'Nice', 'Lyon', 'Marseille', 'Bordeaux', 'Autres'],
                datasets: [{
                    data: [30, 22, 15, 12, 8, 13],
                    backgroundColor: [
                        'rgb(59, 130, 246)',
                        'rgb(16, 185, 129)',
                        'rgb(245, 158, 11)',
                        'rgb(139, 92, 246)',
                        'rgb(239, 68, 68)',
                        'rgb(156, 163, 175)'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Demographics Chart
        const demographicsCtx = document.getElementById('demographicsChart').getContext('2d');
        const demographicsChart = new Chart(demographicsCtx, {
            type: 'doughnut',
            data: {
                labels: ['18-24', '25-34', '35-44', '45-54', '55+'],
                datasets: [{
                    data: [15, 35, 25, 18, 7],
                    backgroundColor: [
                        'rgb(139, 92, 246)',
                        'rgb(59, 130, 246)',
                        'rgb(16, 185, 129)',
                        'rgb(245, 158, 11)',
                        'rgb(239, 68, 68)'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right'
                    }
                }
            }
        });
    </script>
</x-dashbord>
