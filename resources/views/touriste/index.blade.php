<x-master>
    {{-- @include('touriste.partials.navigation'); --}}
<!-- Hero Section -->
    <section class="relative pt-20 pb-32 bg-gradient-to-r from-green-400 to-green-600 text-white">
        <div class="absolute inset-0 overflow-hidden">
            <img src="/api/placeholder/1600/900" alt="Stade de football du Mondial 2030" class="w-full h-full object-cover opacity-20">
        </div>
        <div class="container mx-auto px-4 pt-10 relative z-10">
            <div class="flex flex-col items-center text-center mb-10">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">Trouvez votre hébergement idéal pour le Mondial 2030</h1>
                <p class="text-xl md:text-2xl max-w-3xl mb-8">La meilleure sélection de logements à proximité des stades au Maroc, en Espagne et au Portugal</p>
                <div class="flex space-x-4">
                    <a href="#" class="bg-white text-green-600 font-bold py-3 px-6 rounded-lg hover:bg-green-50 transition shadow-md">Rechercher un logement</a>
                    <a href="#" class="bg-transparent border-2 border-white text-white font-bold py-3 px-6 rounded-lg hover:bg-white/10 transition">Devenir hôte</a>
                </div>
            </div>
            
            <!-- Search Form -->
            <div class="bg-white rounded-xl shadow-xl p-4 md:p-6 max-w-5xl mx-auto">
                <form class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="col-span-1">
                        <label class="block text-gray-700 text-sm font-medium mb-2">Destination</label>
                        <div class="relative">
                            <select class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none">
                                <option>Toutes les villes</option>
                                <option>Casablanca, Maroc</option>
                                <option>Rabat, Maroc</option>
                                <option>Marrakech, Maroc</option>
                                <option>Madrid, Espagne</option>
                                <option>Barcelone, Espagne</option>
                                <option>Lisbonne, Portugal</option>
                                <option>Porto, Portugal</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <label class="block text-gray-700 text-sm font-medium mb-2">Date d'arrivée</label>
                        <div class="relative">
                            <input type="date" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                    </div>
                    <div class="col-span-1">
                        <label class="block text-gray-700 text-sm font-medium mb-2">Date de départ</label>
                        <div class="relative">
                            <input type="date" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                    </div>
                    <div class="col-span-1">
                        <label class="block text-gray-700 text-sm font-medium mb-2">Voyageurs</label>
                        <div class="relative">
                            <select class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none">
                                <option>1 voyageur</option>
                                <option>2 voyageurs</option>
                                <option>3 voyageurs</option>
                                <option>4 voyageurs</option>
                                <option>5+ voyageurs</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 md:col-span-4">
                        <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg transition shadow-md">
                            <i class="fas fa-search mr-2"></i> Rechercher un hébergement
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Featured Destinations -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4 text-green-600">Destinations populaires pour le Mondial 2030</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Découvrez les meilleures villes hôtes pour trouver votre logement idéal à proximité des stades</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Casablanca Card -->
                <div class="rounded-xl overflow-hidden shadow-lg group">
                    <div class="relative h-64">
                        <img src="/api/placeholder/600/400" alt="Casablanca" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-900/70 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <h3 class="text-white text-xl font-bold">Casablanca, Maroc</h3>
                            <p class="text-white/80">254 hébergements disponibles</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="flex items-center text-yellow-400 mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-600">4.5/5 (120 avis)</span>
                        </div>
                        <p class="text-gray-600 mb-4">Hébergements à proximité du stade Mohammed V, parfaits pour les matchs du Mondial.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center">
                            Explorer les logements <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Madrid Card -->
                <div class="rounded-xl overflow-hidden shadow-lg group">
                    <div class="relative h-64">
                        <img src="/api/placeholder/600/400" alt="Madrid" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-900/70 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <h3 class="text-white text-xl font-bold">Madrid, Espagne</h3>
                            <p class="text-white/80">352 hébergements disponibles</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="flex items-center text-yellow-400 mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-600">4.8/5 (186 avis)</span>
                        </div>
                        <p class="text-gray-600 mb-4">Découvrez nos logements près du Santiago Bernabéu pour vivre pleinement le Mondial.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center">
                            Explorer les logements <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Lisbonne Card -->
                <div class="rounded-xl overflow-hidden shadow-lg group">
                    <div class="relative h-64">
                        <img src="/api/placeholder/600/400" alt="Lisbonne" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-900/70 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <h3 class="text-white text-xl font-bold">Lisbonne, Portugal</h3>
                            <p class="text-white/80">198 hébergements disponibles</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="flex items-center text-yellow-400 mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-600">4.1/5 (92 avis)</span>
                        </div>
                        <p class="text-gray-600 mb-4">Séjournez près du stade de la Luz pour profiter au maximum des matchs du Mondial.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 flex items-center">
                            Explorer les logements <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <a href="#" class="inline-block bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg transition shadow-md">
                    Voir toutes les destinations
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Listings -->
    <section class="py-16 bg-green-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4 text-green-600">Hébergements mis en avant</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Découvrez notre sélection des meilleurs logements pour le Mondial 2030</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Listing 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Appartement à Casablanca" class="w-full h-48 object-cover">
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
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">950 MAD <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                            <span class="bg-green-100 text-green-800 text-xs py-1 px-2 rounded-lg">5 nuits minimum</span>
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
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">250 EUR <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                            <span class="bg-green-100 text-green-800 text-xs py-1 px-2 rounded-lg">7 nuits minimum</span>
                        </div>
                    </div>
                </div>
                
                <!-- Listing 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Loft à Lisbonne" class="w-full h-48 object-cover">
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
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">180 EUR <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                            <span class="bg-green-100 text-green-800 text-xs py-1 px-2 rounded-lg">3 nuits minimum</span>
                        </div>
                    </div>
                </div>
                
                <!-- Listing 4 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Appartement à Marrakech" class="w-full h-48 object-cover">
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
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">850 MAD <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                            <span class="bg-green-100 text-green-800 text-xs py-1 px-2 rounded-lg">4 nuits minimum</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <a href="#" class="inline-block bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg transition shadow-md">
                    Explorer tous les hébergements
                </a>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4 text-green-600">Comment ça marche</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">TouriStay 2030 vous simplifie la vie pour trouver ou proposer un hébergement</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-green-100 text-green-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-search text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Recherchez</h3>
                    <p class="text-gray-600">Trouvez l'hébergement idéal en fonction de la ville hôte, des dates de match et de vos préférences.</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-green-100 text-green-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-calendar-check text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Réservez</h3>
                    <p class="text-gray-600">Sécurisez votre séjour en quelques clics, avec confirmation instantanée et paiement sécurisé.</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-green-100 text-green-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-futbol text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Profitez</h3>
                    <p class="text-gray-600">Vivez le Mondial 2030 dans les meilleures conditions avec un logement à proximité des stades.</p>
                </div>
            </div>
            
            <div class="bg-green-50 rounded-xl p-8 mt-12">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-6 md:mb-0 md:mr-6">
                        <h3 class="text-2xl font-bold mb-3 text-green-600">Vous avez un logement à proposer ?</h3>
                        <p class="text-gray-600 mb-4">Rejoignez notre communauté d'hôtes et gagnez un revenu supplémentaire pendant le Mondial 2030.</p>
                        <a href="#" class="inline-block bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg transition shadow-md">
                            Devenir hôte
                        </a>
                    </div>
                    <div class="w-full md:w-1/3">
                        <img src="/api/placeholder/600/400" alt="Devenir hôte" class="w-full h-auto rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-green-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4 text-green-600">Ce que disent nos utilisateurs</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Découvrez les expériences partagées par notre communauté</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex items-center text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"J'ai trouvé un appartement parfait à Casablanca pour assister aux matchs avec mes amis. Emplacement idéal et hôte très accueillant."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="/api/placeholder/100/100" alt="Photo de profil" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-medium">Carlos Rodriguez</h4>
                            <p class="text-gray-500 text-sm">Madrid, Espagne</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex items-center text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"En tant que propriétaire, j'ai pu louer mon appartement pendant le Mondial et gagner un revenu supplémentaire. La plateforme est très facile à utiliser."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="/api/placeholder/100/100" alt="Photo de profil" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-medium">Fatima Benali</h4>
                            <p class="text-gray-500 text-sm">Rabat, Maroc</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex items-center text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"J'ai réservé un logement à Lisbonne pour trois matchs. Le système de recherche est excellent et j'ai trouvé exactement ce que je cherchais."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="/api/placeholder/100/100" alt="Photo de profil" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-medium">Jean Dupont</h4>
                            <p class="text-gray-500 text-sm">Lyon, France</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-master>