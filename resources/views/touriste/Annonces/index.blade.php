<x-master-layout>
    <section class="pt-20 bg-green-50">
        <form id="formulaireAnnonce" action="{{ route('Annonce.filtrage') }}" method="POST" class="container mx-auto px-4 pt-10">
            @csrf
            <div class="flex flex-col items-center text-center mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-green-600 mb-4">Explorez les hébergements pour le Mondial 2030</h1>
                <p class="text-gray-600 max-w-3xl">Trouvez le logement idéal à proximité des stades au Maroc, en Espagne et au Portugal</p>
            </div>
            
            <!-- Barre de recherche simple -->
            <div class="bg-white rounded-xl shadow-md p-4 max-w-3xl mx-auto mb-5">
                <div class="relative">
                    <input 
                        type="text" 
                        name="search"
                        value="{{ $searchTerm ?? '' }}"
                        placeholder="Rechercher une destination..." 
                        class="w-full p-3 pl-10 pr-12 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                    >
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <button type="submit" class="absolute inset-y-0 right-0 flex items-center px-4 text-white bg-green-500 rounded-r-lg hover:bg-green-600 transition-colors">
                        Rechercher
                    </button>
                </div>
            </div> 
            <!-- Results Stats -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-lg font-semibold text-gray-800">{{ count($Annonces) }} hébergements trouvés</h2>
                </div>
                <div class="flex items-center space-x-4">
                    {{-- <label class="text-gray-700">Trier par:</label>
                    <select name="trier" class="p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none">
                        <option>Recommandés</option>
                        <option>Prix (croissant)</option>
                        <option>Prix (décroissant)</option>
                        <option>Mieux notés</option>
                        <option>Distance du stade</option>
                    </select> --}}
                    <div  class="flex space-x-2">
                        <select name="pagination" id="Selectpagination"
                            class="w-14 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none">
                            <option value="4" {{ $paginateTerm == 4 ? 'selected' : '' }}>4</option>
                            <option value="10" {{ $paginateTerm == 10 ? 'selected' : '' }}>10</option>
                            <option value="25" {{ $paginateTerm == 25 ? 'selected' : '' }}>25</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!-- Listings Section -->
    <section class="py-8 bg-green-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Listing 1 -->
                @foreach ($Annonces as $annonce)
                    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                        <div class="relative">
                            <img src="{{ asset('storage/' . $annonce->photo) }}" alt="Appartement à Casablanca" class="w-full h-48 object-cover">
                            <form action="{{ route('annonce.favoris') }}" method="POST">
                                @csrf
                                <input type="text" name="id" value="{{ $annonce->id }}">
                                <button type="submit" class="absolute top-4 right-4 bg-white/70 backdrop-blur-sm p-2 rounded-full hover:bg-white transition">
                                    <i class="far fa-heart text-red-500"></i>
                                </button>
                            </form>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="font-medium text-gray-700">{{ $annonce->location }} • {{ $annonce->Country }}</span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                                    <span>4.8</span>
                                </div>
                            </div>
                            <h3 class="font-bold mb-2 text-lg">{{ $annonce->title }}</h3>
                            <p class="text-gray-600 text-sm mb-3">{{ $annonce->description }}</p>
                            {{-- <div class="flex flex-wrap gap-2 mb-3">
                                <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">2 chambres</span>
                                <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">4 personnes</span>
                                <span class="bg-gray-100 text-gray-700 text-xs py-1 px-2 rounded">Wi-Fi</span>
                            </div> --}}
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-lg">{{ $annonce->prix }} MAD <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                                <a href="#" class="text-green-600 font-medium hover:text-green-800">Voir détails</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="flex justify-center mt-10">
                {{ $Annonces->Links() }}
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
<script>
    Selectpagination.addEventListener('change', function() {
        formulaireAnnonce.submit();
    });
</script>
</x-master-layout>    