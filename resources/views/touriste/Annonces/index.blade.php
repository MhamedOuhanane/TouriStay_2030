<x-master-layout>
    <section class="pt-20 bg-green-50">
        <div class="container mx-auto px-4 pt-10">
            <div class="flex flex-col items-center text-center mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-green-600 mb-4">Explorez les hébergements pour le Mondial 2030</h1>
                <p class="text-gray-600 max-w-3xl">Trouvez le logement idéal à proximité des stades au Maroc, en Espagne et au Portugal</p>
            </div>
            
            <!-- Barre de recherche simple -->
            <div class="bg-white rounded-xl shadow-md p-4 max-w-3xl mx-auto">
                <div class="relative">
                <input 
                    type="text" 
                    placeholder="Rechercher une destination..." 
                    class="w-full p-3 pl-10 pr-12 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                >
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <button class="absolute inset-y-0 right-0 flex items-center px-4 text-white bg-green-500 rounded-r-lg hover:bg-green-600 transition-colors">
                    Rechercher
                </button>
                </div>
            </div> 
            <!-- Results Stats -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-lg font-semibold text-gray-800">804 hébergements trouvés</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <label class="text-gray-700">Trier par:</label>
                    <select class="p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none">
                        <option>Recommandés</option>
                        <option>Prix (croissant)</option>
                        <option>Prix (décroissant)</option>
                        <option>Mieux notés</option>
                        <option>Distance du stade</option>
                    </select>
                    <div class="flex space-x-2">
                        <button class="p-2 rounded-lg border border-gray-300 bg-white hover:bg-gray-50">
                            <i class="fas fa-th-large text-green-600"></i>
                        </button>
                        <button class="p-2 rounded-lg border border-gray-300 bg-white hover:bg-gray-50">
                            <i class="fas fa-list text-gray-500"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Listings Section -->
    <section class="py-8 bg-green-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Listing 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Appartement à Casablanca" class="w-full h-48 object-cover">
                        <div class="absolute top-0 left-0 bg-green-500 text-white px-3 py-1 m-3 rounded-lg text-sm font-medium">
                            Populaire
                        </div>
                        <button class="absolute top-4 right-4 bg-white/70 backdrop-blur-sm p-2 rounded-full hover:bg-white transition">
                            <i class="far fa-heart text-red-500"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-medium text-gray-700">Appartement • Casablanca</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span>4.8</span>
                            </div>
                        </div>
                        <h3 class="font-bold mb-2 text-lg">Appartement moderne près du stade</h3>
                        <p class="text-gray-600 text-sm mb-3">À 10 min à pied du Stade Mohammed V, parfait pour les matchs du Mondial.</p>
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">2 chambres</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">4 personnes</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">Wi-Fi</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">950 MAD <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                            <a href="#" class="text-green-600 font-medium hover:text-green-800">Voir détails</a>
                        </div>
                    </div>
                </div>
                
                <!-- Listing 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Villa à Madrid" class="w-full h-48 object-cover">
                        <button class="absolute top-4 right-4 bg-white/70 backdrop-blur-sm p-2 rounded-full hover:bg-white transition">
                            <i class="far fa-heart text-red-500"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-medium text-gray-700">Villa • Madrid</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span>4.9</span>
                            </div>
                        </div>
                        <h3 class="font-bold mb-2 text-lg">Villa luxueuse avec piscine</h3>
                        <p class="text-gray-600 text-sm mb-3">Accès facile au stade Santiago Bernabéu, idéal pour les groupes.</p>
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">4 chambres</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">8 personnes</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">Piscine</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">250 EUR <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                            <a href="#" class="text-green-600 font-medium hover:text-green-800">Voir détails</a>
                        </div>
                    </div>
                </div>
                
                <!-- Listing 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Loft à Lisbonne" class="w-full h-48 object-cover">
                        <div class="absolute top-0 left-0 bg-blue-500 text-white px-3 py-1 m-3 rounded-lg text-sm font-medium">
                            Nouveau
                        </div>
                        <button class="absolute top-4 right-4 bg-white/70 backdrop-blur-sm p-2 rounded-full hover:bg-white transition">
                            <i class="far fa-heart text-red-500"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-medium text-gray-700">Loft • Lisbonne</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span>4.7</span>
                            </div>
                        </div>
                        <h3 class="font-bold mb-2 text-lg">Loft moderne au centre-ville</h3>
                        <p class="text-gray-600 text-sm mb-3">À 15 minutes en métro du stade de la Luz. Quartier animé.</p>
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">1 chambre</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">2 personnes</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">Wi-Fi</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">180 EUR <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                            <a href="#" class="text-green-600 font-medium hover:text-green-800">Voir détails</a>
                        </div>
                    </div>
                </div>
                
                <!-- Listing 4 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Riad à Marrakech" class="w-full h-48 object-cover">
                        <button class="absolute top-4 right-4 bg-white/70 backdrop-blur-sm p-2 rounded-full hover:bg-white transition">
                            <i class="far fa-heart text-red-500"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-medium text-gray-700">Riad • Marrakech</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span>4.9</span>
                            </div>
                        </div>
                        <h3 class="font-bold mb-2 text-lg">Riad authentique dans la médina</h3>
                        <p class="text-gray-600 text-sm mb-3">Expérience marocaine traditionnelle avec service de navette vers le stade.</p>
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">3 chambres</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">6 personnes</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">Navette</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">850 MAD <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                            <a href="#" class="text-green-600 font-medium hover:text-green-800">Voir détails</a>
                        </div>
                    </div>
                </div>
                
                <!-- Listing 5 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Appartement à Barcelone" class="w-full h-48 object-cover">
                        <div class="absolute top-0 left-0 bg-red-500 text-white px-3 py-1 m-3 rounded-lg text-sm font-medium">
                            -15%
                        </div>
                        <button class="absolute top-4 right-4 bg-white/70 backdrop-blur-sm p-2 rounded-full hover:bg-white transition">
                            <i class="far fa-heart text-red-500"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-medium text-gray-700">Appartement • Barcelone</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span>4.6</span>
                            </div>
                        </div>
                        <h3 class="font-bold mb-2 text-lg">Appartement près du Camp Nou</h3>
                        <p class="text-gray-600 text-sm mb-3">Situé à seulement 5 minutes du stade. Vue sur la ville depuis le balcon.</p>
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">2 chambres</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">4 personnes</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">Balcon</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="line-through text-gray-500 text-sm">200 EUR</span>
                                <span class="font-bold text-lg ml-1">170 EUR <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                            </div>
                            <a href="#" class="text-green-600 font-medium hover:text-green-800">Voir détails</a>
                        </div>
                    </div>
                </div>
                
                <!-- Listing 6 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Maison à Porto" class="w-full h-48 object-cover">
                        <button class="absolute top-4 right-4 bg-white/70 backdrop-blur-sm p-2 rounded-full hover:bg-white transition">
                            <i class="far fa-heart text-red-500"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-medium text-gray-700">Maison • Porto</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span>4.8</span>
                            </div>
                        </div>
                        <h3 class="font-bold mb-2 text-lg">Maison traditionnelle rénovée</h3>
                        <p class="text-gray-600 text-sm mb-3">Proche du stade do Dragão et du centre historique de Porto.</p>
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">3 chambres</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">5 personnes</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">Parking</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">195 EUR <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                            <a href="#" class="text-green-600 font-medium hover:text-green-800">Voir détails</a>
                        </div>
                    </div>
                </div>
                
                <!-- Listing 7 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Appartement à Rabat" class="w-full h-48 object-cover">
                        <button class="absolute top-4 right-4 bg-white/70 backdrop-blur-sm p-2 rounded-full hover:bg-white transition">
                            <i class="far fa-heart text-red-500"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-medium text-gray-700">Appartement • Rabat</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span>4.7</span>
                            </div>
                        </div>
                        <h3 class="font-bold mb-2 text-lg">Bel appartement avec vue mer</h3>
                        <p class="text-gray-600 text-sm mb-3">À 15 min en voiture du stade. Vue panoramique sur l'océan.</p>
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">2 chambres</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">4 personnes</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">Terrasse</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">800 MAD <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                            <a href="#" class="text-green-600 font-medium hover:text-green-800">Voir détails</a>
                        </div>
                    </div>
                </div>
                
                <!-- Listing 8 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Studio à Madrid" class="w-full h-48 object-cover">
                        <div class="absolute top-0 left-0 bg-green-500 text-white px-3 py-1 m-3 rounded-lg text-sm font-medium">
                            Économique
                        </div>
                        <button class="absolute top-4 right-4 bg-white/70 backdrop-blur-sm p-2 rounded-full hover:bg-white transition">
                            <i class="far fa-heart text-red-500"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-medium text-gray-700">Studio • Madrid</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span>4.5</span>
                            </div>
                        </div>
                        <h3 class="font-bold mb-2 text-lg">Studio cosy en plein centre</h3>
                        <p class="text-gray-600 text-sm mb-3">Accès facile en métro au stade Santiago Bernabéu (20 min).</p>
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">Studio</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">2 personnes</span>
                            <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">Wi-Fi</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">120 EUR <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                            <a href="#" class="text-green-600 font-medium hover:text-green-800">Voir détails</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="flex justify-center mt-10">
                <nav class="inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Previous</span>
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-green-500 text-sm font-medium text-white hover:bg-green-600">
                        1
                    </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        2
                    </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        3
                    </a>
                    <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                        ...
                    </span>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        8
                    </a>
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Next</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </nav>
            </div>
        </div>
    </section>

    <!-- Section Destinations Populaires -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Destinations populaires</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Découvrez les villes hôtes du Mondial 2030 et leurs attractions principales</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Destination 1 -->
            <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition group">
                <div class="relative h-64">
                    <img src="/api/placeholder/600/400" alt="Casablanca, Maroc" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-white text-xl font-bold mb-1">Casablanca, Maroc</h3>
                        <div class="flex items-center text-white/90 text-sm">
                            <i class="fas fa-futbol mr-2"></i>
                            <span>Stade Mohammed V</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Visitez la mosquée Hassan II et profitez des plages tout en assistant aux matchs dans cette ville dynamique.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-bed text-green-600 mr-1"></i>
                            <span class="text-gray-700">156 hébergements</span>
                        </div>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center">
                            Explorer 
                            <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Destination 2 -->
            <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition group">
                <div class="relative h-64">
                    <img src="/api/placeholder/600/400" alt="Madrid, Espagne" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-white text-xl font-bold mb-1">Madrid, Espagne</h3>
                        <div class="flex items-center text-white/90 text-sm">
                            <i class="fas fa-futbol mr-2"></i>
                            <span>Santiago Bernabéu</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Explorez la Plaza Mayor, le Musée du Prado et profitez de la cuisine locale entre les matchs.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-bed text-green-600 mr-1"></i>
                            <span class="text-gray-700">208 hébergements</span>
                        </div>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center">
                            Explorer 
                            <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Destination 3 -->
            <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition group">
                <div class="relative h-64">
                    <img src="/api/placeholder/600/400" alt="Lisbonne, Portugal" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-white text-xl font-bold mb-1">Lisbonne, Portugal</h3>
                        <div class="flex items-center text-white/90 text-sm">
                            <i class="fas fa-futbol mr-2"></i>
                            <span>Estádio da Luz</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Découvrez le quartier de l'Alfama, dégustez les pasteis de nata et admirez la vue depuis le Château São Jorge.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-bed text-green-600 mr-1"></i>
                            <span class="text-gray-700">175 hébergements</span>
                        </div>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center">
                            Explorer 
                            <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-10 text-center">
            <a href="#" class="inline-flex items-center px-6 py-3 border border-green-600 text-green-600 font-medium rounded-lg hover:bg-green-50 transition">
                Voir toutes les destinations
                <i class="fas fa-chevron-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Section Témoignages -->
<section class="py-16 bg-green-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Ce que disent nos clients</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Des expériences inoubliables lors des précédentes compétitions internationales</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Témoignage 1 -->
            <div class="bg-white p-6 rounded-xl shadow-md">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/60/60" class="h-12 w-12 rounded-full object-cover" alt="Client">
                    </div>
                    <div class="ml-4">
                        <h4 class="font-medium text-gray-800">Sophie Dupont</h4>
                        <div class="flex items-center mt-1">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                    </div>
                </div>
                <blockquote class="text-gray-600 italic mb-4">
                    "Nous avons réservé un appartement à Barcelone pour le dernier Championnat d'Europe. L'emplacement était parfait, à seulement 10 minutes du stade. Le service client était impeccable et a rendu notre expérience inoubliable."
                </blockquote>
                <p class="text-sm text-gray-500">Séjour en juin 2024 • Barcelone</p>
            </div>
            
            <!-- Témoignage 2 -->
            <div class="bg-white p-6 rounded-xl shadow-md">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/60/60" class="h-12 w-12 rounded-full object-cover" alt="Client">
                    </div>
                    <div class="ml-4">
                        <h4 class="font-medium text-gray-800">Mehdi Alaoui</h4>
                        <div class="flex items-center mt-1">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star-half-alt text-yellow-400"></i>
                        </div>
                    </div>
                </div>
                <blockquote class="text-gray-600 italic mb-4">
                    "La villa que nous avons louée au Portugal pour la Coupe du Monde 2022 était exceptionnelle. Spacieuse, propre et avec un service de navette inclus vers le stade. Je recommande vivement pour le Mondial 2030!"
                </blockquote>
                <p class="text-sm text-gray-500">Séjour en novembre 2022 • Porto</p>
            </div>
            
            <!-- Témoignage 3 -->
            <div class="bg-white p-6 rounded-xl shadow-md">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/60/60" class="h-12 w-12 rounded-full object-cover" alt="Client">
                    </div>
                    <div class="ml-4">
                        <h4 class="font-medium text-gray-800">Carlos Rodriguez</h4>
                        <div class="flex items-center mt-1">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                    </div>
                </div>
                <blockquote class="text-gray-600 italic mb-4">
                    "Notre séjour à Marrakech pour la CAN a été fantastique. Le riad était magnifique et l'hôte nous a aidés à organiser nos déplacements vers le stade. Une expérience authentique que nous espérons revivre pour le Mondial 2030."
                </blockquote>
                <p class="text-sm text-gray-500">Séjour en janvier 2024 • Marrakech</p>
            </div>
        </div>
    </div>
</section>
</x-master-layout>    