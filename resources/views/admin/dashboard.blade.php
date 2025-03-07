<x-dashboard>
    <div class="flex h-screen overflow-hidden">

            <!-- Dashboard Content -->
            <main class="p-6">
                @include('admin.partials.bord_table')
                
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
</x-dashboard>
