<x-master-layout>
    <!-- Hero Section -->
    <section class="relative bg-gray-900 text-white">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80'); filter: brightness(0.5);"></div>
        <div class="container mx-auto px-4 py-24 relative z-10">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Trouvez votre hébergement idéal pour le Mondial 2030</h1>
                <p class="text-xl mb-8">Découvrez des milliers de logements au Maroc, en Espagne et au Portugal pour vivre pleinement l'expérience du Mondial 2030.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-xl p-6 max-w-4xl mx-auto">
                <form class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-gray-700 mb-2">Destination</label>
                        <div class="relative">
                            <select class="w-full bg-gray-50 border border-gray-300 text-gray-700 py-3 px-4 pr-8 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                <option>Toutes les villes</option>
                                <option>Casablanca, Maroc</option>
                                <option>Rabat, Maroc</option>
                                <option>Madrid, Espagne</option>
                                <option>Barcelone, Espagne</option>
                                <option>Lisbonne, Portugal</option>
                                <option>Porto, Portugal</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 mb-2">Dates</label>
                        <input type="text" placeholder="Arrivée - Départ" class="w-full bg-gray-50 border border-gray-300 text-gray-700 py-3 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 mb-2">Voyageurs</label>
                        <div class="relative">
                            <select class="w-full bg-gray-50 border border-gray-300 text-gray-700 py-3 px-4 pr-8 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                <option>1 voyageur</option>
                                <option>2 voyageurs</option>    
                                <option>3 voyageurs</option>
                                <option>4 voyageurs</option>
                                <option>5+ voyageurs</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="md:col-span-3">
                        <button class="w-full bg-primary text-white py-3 px-6 rounded-lg font-medium hover:bg-opacity-90 transition duration-300">
                            <i class="fas fa-search mr-2"></i> Rechercher
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Pourquoi choisir TouriStay 2030 ?</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg text-center">
                    <div class="bg-light inline-block p-4 rounded-full mb-4">
                        <i class="fas fa-map-marker-alt text-primary text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Emplacements stratégiques</h3>
                    <p class="text-gray-600">Des hébergements situés à proximité des stades et des principales attractions touristiques.</p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg text-center">
                    <div class="bg-light inline-block p-4 rounded-full mb-4">
                        <i class="fas fa-shield-alt text-primary text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Réservation sécurisée</h3>
                    <p class="text-gray-600">Système de paiement sécurisé et vérification des propriétaires pour votre tranquillité d'esprit.</p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg text-center">
                    <div class="bg-light inline-block p-4 rounded-full mb-4">
                        <i class="fas fa-headset text-primary text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Support 24/7</h3>
                    <p class="text-gray-600">Une équipe disponible à tout moment pour répondre à vos questions et résoudre vos problèmes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Accommodations -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold">Hébergements populaires</h2>
                <a href="#" class="text-primary font-medium hover:underline">Voir tout <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Accommodation 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Appartement à Casablanca" class="w-full h-48 object-cover">
                        <div class="absolute top-3 right-3 bg-white p-2 rounded-full shadow">
                            <i class="far fa-heart text-secondary"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-500">Casablanca, Maroc</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 text-sm"></i>
                                <span class="text-sm font-medium ml-1">4.8</span>
                            </div>
                        </div>
                        <h3 class="font-semibold mb-2">Appartement moderne avec vue</h3>
                        <p class="text-gray-600 text-sm mb-3">À 15 min du stade Mohammed V</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">120 € <span class="text-sm font-normal text-gray-500">/ nuit</span></span>
                            <a href="#" class="text-primary font-medium text-sm hover:underline">Voir détails</a>
                        </div>
                    </div>
                </div>
                
                <!-- Accommodation 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1680&q=80" alt="Villa à Madrid" class="w-full h-48 object-cover">
                        <div class="absolute top-3 right-3 bg-white p-2 rounded-full shadow">
                            <i class="far fa-heart text-secondary"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-500">Madrid, Espagne</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 text-sm"></i>
                                <span class="text-sm font-medium ml-1">4.9</span>
                            </div>
                        </div>
                        <h3 class="font-semibold mb-2">Villa avec piscine privée</h3>
                        <p class="text-gray-600 text-sm mb-3">À 20 min du Santiago Bernabéu</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">250 € <span class="text-sm font-normal text-gray-500">/ nuit</span></span>
                            <a href="#" class="text-primary font-medium text-sm hover:underline">Voir détails</a>
                        </div>
                    </div>
                </div>
                
                <!-- Accommodation 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Loft à Lisbonne" class="w-full h-48 object-cover">
                        <div class="absolute top-3 right-3 bg-white p-2 rounded-full shadow">
                            <i class="far fa-heart text-secondary"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-500">Lisbonne, Portugal</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 text-sm"></i>
                                <span class="text-sm font-medium ml-1">4.7</span>
                            </div>
                        </div>
                        <h3 class="font-semibold mb-2">Loft au cœur de la ville</h3>
                        <p class="text-gray-600 text-sm mb-3">À 10 min du stade da Luz</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">180 € <span class="text-sm font-normal text-gray-500">/ nuit</span></span>
                            <a href="#" class="text-primary font-medium text-sm hover:underline">Voir détails</a>
                        </div>
                    </div>
                </div>
                
                <!-- Accommodation 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1484154218962-a197022b5858?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1774&q=80" alt="Maison à Rabat" class="w-full h-48 object-cover">
                        <div class="absolute top-3 right-3 bg-white p-2 rounded-full shadow">
                            <i class="far fa-heart text-secondary"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-500">Rabat, Maroc</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 text-sm"></i>
                                <span class="text-sm font-medium ml-1">4.6</span>
                            </div>
                        </div>
                        <h3 class="font-semibold mb-2">Maison traditionnelle rénovée</h3>
                        <p class="text-gray-600 text-sm mb-3">À 15 min du stade Moulay Abdallah</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">150 € <span class="text-sm font-normal text-gray-500">/ nuit</span></span>
                            <a href="#" class="text-primary font-medium text-sm hover:underline">Voir détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- World Cup 2030 Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Mondial 2030: Une expérience unique</h2>
                    <p class="text-gray-600 mb-6">Pour la première fois de l'histoire, la Coupe du Monde de football sera organisée par trois pays: le Maroc, l'Espagne et le Portugal. Profitez de cette occasion unique pour découvrir ces magnifiques destinations tout en vivant la passion du football.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                        <div class="bg-gray-50 p-4 rounded-lg text-center">
                            <img src="https://flagcdn.com/w320/ma.png" alt="Drapeau du Maroc" class="h-8 mx-auto mb-2">
                            <h3 class="font-semibold">Maroc</h3>
                            <p class="text-sm text-gray-600">5 villes hôtes</p>
                        </div>
                        
                        <div class="bg-gray-50 p-4 rounded-lg text-center">
                            <img src="https://flagcdn.com/w320/es.png" alt="Drapeau de l'Espagne" class="h-8 mx-auto mb-2">
                            <h3 class="font-semibold">Espagne</h3>
                            <p class="text-sm text-gray-600">6 villes hôtes</p>
                        </div>
                        
                        <div class="bg-gray-50 p-4 rounded-lg text-center">
                            <img src="https://flagcdn.com/w320/pt.png" alt="Drapeau du Portugal" class="h-8 mx-auto mb-2">
                            <h3 class="font-semibold">Portugal</h3>
                            <p class="text-sm text-gray-600">4 villes hôtes</p>
                        </div>
                    </div>
                    
                    <a href="#" class="inline-block bg-primary text-white px-6 py-3 rounded-lg font-medium hover:bg-opacity-90 transition duration-300">En savoir plus sur le Mondial 2030</a>
                </div>
                
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1518091043644-c1d4457512c6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1769&q=80" alt="Stade de football" class="rounded-lg shadow-lg w-full">
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-lg shadow-lg">
                        <div class="flex items-center">
                            <div class="bg-primary text-white rounded-full w-12 h-12 flex items-center justify-center mr-4">
                                <i class="fas fa-calendar-alt text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Début du tournoi</p>
                                <p class="font-semibold">Juin 2030</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Ce que disent nos utilisateurs</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Photo de profil" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="font-semibold">Sophie Martin</h3>
                            <p class="text-sm text-gray-500">France</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600">"J'ai réservé un appartement à Casablanca pour le match d'ouverture. Le processus était simple et l'hébergement était exactement comme sur les photos. Je recommande vivement TouriStay !"</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Photo de profil" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="font-semibold">Carlos Rodriguez</h3>
                            <p class="text-sm text-gray-500">Mexique</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star-half-alt text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600">"Excellente plateforme pour trouver un logement pendant les grands événements sportifs. J'ai pu réserver facilement une villa à Madrid pour ma famille. Le propriétaire était très accueillant."</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Photo de profil" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="font-semibold">Amina Khalid</h3>
                            <p class="text-sm text-gray-500">Égypte</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600">"J'ai loué un appartement à Lisbonne pour assister aux matchs du Mondial. L'emplacement était parfait, à proximité du stade et des transports. Le service client de TouriStay a été très réactif."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Prêt à vivre l'expérience du Mondial 2030 ?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Rejoignez TouriStay dès maintenant et trouvez l'hébergement parfait pour votre séjour au Maroc, en Espagne ou au Portugal.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-white text-primary px-8 py-3 rounded-lg font-medium hover:bg-gray-100 transition duration-300">Créer un compte</a>
                <a href="#" class="border-2 border-white text-white px-8 py-3 rounded-lg font-medium hover:bg-white hover:text-primary transition duration-300">Explorer les hébergements</a>
            </div>
        </div>
    </section>
</x-master-layout>