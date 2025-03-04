<x-master-layout>
    <section class="pt-20 bg-green-50">
        <div class="container mx-auto px-4 pt-10 pb-16">
            <!-- Fil d'Ariane -->
            <div class="mb-6">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}" class="text-gray-600 hover:text-green-600">
                                <i class="fas fa-home mr-2"></i>Accueil
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                                <a href="{{ route('annonces.index') }}" class="text-gray-600 hover:text-green-600">Hébergements</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                                <span class="text-gray-500">{{ $Annonces[0]->title }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>

            <!-- Titre et Info principale -->
            <div class="mb-8">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">{{ $Annonces[0]->title }}</h1>
                        <div class="flex items-center flex-wrap gap-2">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-green-600 mr-2"></i>
                                <span class="text-gray-700">{{ $Annonces[0]->location }}, {{ $Annonces[0]->Country }}</span>
                            </div>
                            <span class="text-gray-400 mx-2">•</span>
                            <div class="flex items-center">
                                <i class="fas fa-futbol text-green-600 mr-2"></i>
                                <span class="text-gray-700">À 2.5 km du stade</span>
                            </div>
                            <span class="text-gray-400 mx-2">•</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="text-gray-700">4.8 (42 avis)</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 md:mt-0 flex space-x-3">
                        <form action="{{ route('annonce.favoris', ['id' => $Annonces[0]->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="flex items-center px-4 py-2 border border-green-600 text-green-600 rounded-lg hover:bg-green-50 transition">
                                <i class="far fa-heart mr-2"></i>
                                Sauvegarder
                            </button>
                        </form>
                        <button class="flex items-center px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-share-alt mr-2 text-gray-600"></i>
                            Partager
                        </button>
                    </div>
                </div>
            </div>

            <!-- Galerie photos -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 mb-8 rounded-xl overflow-hidden">
                <div class="md:col-span-2 lg:col-span-2 lg:row-span-2">
                    <img src="{{ asset('storage/' . $Annonces[0]->photo) }}" alt="{{ $Annonces[0]->title }}" class="w-full h-full object-cover">
                </div>
                <div>
                    <img src="{{ asset('storage/' . $Annonces[0]->photo) }}" alt="{{ $Annonces[0]->title }}" class="w-full h-full object-cover">
                </div>
                <div>
                    <img src="{{ asset('storage/' . $Annonces[0]->photo) }}" alt="{{ $Annonces[0]->title }}" class="w-full h-full object-cover">
                </div>
                <div>
                    <img src="{{ asset('storage/' . $Annonces[0]->photo) }}" alt="{{ $Annonces[0]->title }}" class="w-full h-full object-cover">
                </div>
                <div class="relative">
                    <img src="{{ asset('storage/' . $Annonces[0]->photo) }}" alt="{{ $Annonces[0]->title }}" class="w-full h-full object-cover">
                    <button class="absolute inset-0 bg-black/50 text-white flex items-center justify-center font-medium hover:bg-black/60 transition">
                        Voir toutes les photos
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Colonne principale (détails) -->
                <div class="lg:col-span-2">
                    <!-- Section hôte -->
                    <div class="bg-white p-6 rounded-xl shadow-md mb-6">
                        <div class="flex items-start justify-between mb-6">
                            <div class="flex">
                                <img src="/api/placeholder/60/60" alt="Photo de l'hôte" class="w-14 h-14 rounded-full mr-4 object-cover">
                                <div>
                                    <h3 class="font-semibold text-lg">Hébergement proposé par {{ $Annonces[0]->user->name ?? 'Hôte' }}</h3>
                                    <p class="text-gray-600">Membre depuis {{ $Annonces[0]->created_at->format('F Y') }}</p>
                                </div>
                            </div>
                            <div>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    Vérifié
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div class="flex items-center">
                                <i class="fas fa-medal text-green-600 mr-3 text-xl"></i>
                                <div>
                                    <h4 class="font-medium">Superhôte</h4>
                                    <p class="text-sm text-gray-600">Expérience confirmée</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-comment-dots text-green-600 mr-3 text-xl"></i>
                                <div>
                                    <h4 class="font-medium">Réponse rapide</h4>
                                    <p class="text-sm text-gray-600">En moins d'une heure</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-language text-green-600 mr-3 text-xl"></i>
                                <div>
                                    <h4 class="font-medium">Multilingue</h4>
                                    <p class="text-sm text-gray-600">Français, Anglais, Arabe</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-700">Je serai ravi de vous accueillir pour le Mondial 2030 et de vous faire découvrir notre belle région. N'hésitez pas à me contacter pour toute question.</p>
                        <button class="mt-4 inline-flex items-center text-green-600 font-medium hover:text-green-800">
                            Contacter l'hôte
                            <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                    
                    <!-- Description -->
                    <div class="bg-white p-6 rounded-xl shadow-md mb-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">À propos de ce logement</h2>
                        <p class="text-gray-700 mb-4">{{ $Annonces[0]->description }}</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                            <div>
                                <h3 class="font-semibold mb-3">Caractéristiques</h3>
                                <ul class="space-y-2">
                                    <li class="flex items-center text-gray-700">
                                        <i class="fas fa-bed text-green-600 mr-3 w-5 text-center"></i>
                                        <span>2 chambres</span>
                                    </li>
                                    <li class="flex items-center text-gray-700">
                                        <i class="fas fa-bath text-green-600 mr-3 w-5 text-center"></i>
                                        <span>1 salle de bain</span>
                                    </li>
                                    <li class="flex items-center text-gray-700">
                                        <i class="fas fa-users text-green-600 mr-3 w-5 text-center"></i>
                                        <span>Capacité: 4 personnes</span>
                                    </li>
                                    <li class="flex items-center text-gray-700">
                                        <i class="fas fa-vector-square text-green-600 mr-3 w-5 text-center"></i>
                                        <span>80 m²</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-3">Équipements</h3>
                                <ul class="space-y-2">
                                    <li class="flex items-center text-gray-700">
                                        <i class="fas fa-wifi text-green-600 mr-3 w-5 text-center"></i>
                                        <span>Wi-Fi haut débit</span>
                                    </li>
                                    <li class="flex items-center text-gray-700">
                                        <i class="fas fa-thermometer-half text-green-600 mr-3 w-5 text-center"></i>
                                        <span>Climatisation</span>
                                    </li>
                                    <li class="flex items-center text-gray-700">
                                        <i class="fas fa-tv text-green-600 mr-3 w-5 text-center"></i>
                                        <span>TV avec chaînes sportives</span>
                                    </li>
                                    <li class="flex items-center text-gray-700">
                                        <i class="fas fa-utensils text-green-600 mr-3 w-5 text-center"></i>
                                        <span>Cuisine équipée</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="mt-6 px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
                            Voir tous les équipements
                        </button>
                    </div>
                    
                    <!-- Localisation -->
                    <div class="bg-white p-6 rounded-xl shadow-md mb-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Emplacement</h2>
                        <div class="rounded-lg overflow-hidden h-64 mb-4">
                            <!-- Placeholder pour la carte -->
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500">Carte de l'emplacement</span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h3 class="font-semibold mb-2">Quartier: {{ $Annonces[0]->location }}</h3>
                            <p class="text-gray-700">Quartier calme et sécurisé, idéalement situé à proximité du stade et des transports en commun.</p>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">À proximité</h3>
                            <ul class="space-y-2">
                                <li class="flex items-center text-gray-700">
                                    <i class="fas fa-futbol text-green-600 mr-3 w-5 text-center"></i>
                                    <span>Stade: 2.5 km (10 min en transport)</span>
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <i class="fas fa-subway text-green-600 mr-3 w-5 text-center"></i>
                                    <span>Station de métro: 400m</span>
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <i class="fas fa-store text-green-600 mr-3 w-5 text-center"></i>
                                    <span>Supermarchés, restaurants: 200m</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Avis -->
                    <div class="bg-white p-6 rounded-xl shadow-md mb-6">
                        <div class="flex items-center mb-6">
                            <h2 class="text-xl font-bold text-gray-800">Avis</h2>
                            <div class="flex items-center ml-4">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="font-medium">4.8</span>
                                <span class="text-gray-600 ml-1">(42 avis)</span>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div>
                                <h3 class="font-semibold mb-3">Évaluations détaillées</h3>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <span class="w-32 text-sm text-gray-700">Propreté</span>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-600 h-2 rounded-full" style="width: 95%"></div>
                                        </div>
                                        <span class="ml-2 text-sm font-medium">4.9</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-32 text-sm text-gray-700">Communication</span>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-600 h-2 rounded-full" style="width: 90%"></div>
                                        </div>
                                        <span class="ml-2 text-sm font-medium">4.8</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-32 text-sm text-gray-700">Précision</span>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-600 h-2 rounded-full" style="width: 85%"></div>
                                        </div>
                                        <span class="ml-2 text-sm font-medium">4.7</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-32 text-sm text-gray-700">Emplacement</span>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-600 h-2 rounded-full" style="width: 100%"></div>
                                        </div>
                                        <span class="ml-2 text-sm font-medium">5.0</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-3">Ce que les voyageurs adorent</h3>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <i class="fas fa-map-marker-alt text-green-600 mr-2"></i>
                                        <span class="text-gray-700">Proximité avec le stade</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shower text-green-600 mr-2"></i>
                                        <span class="text-gray-700">Propreté impeccable</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-bed text-green-600 mr-2"></i>
                                        <span class="text-gray-700">Confort des lits</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-comments text-green-600 mr-2"></i>
                                        <span class="text-gray-700">Communication avec l'hôte</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <!-- Avis 1 -->
                            <div class="border-t pt-6">
                                <div class="flex items-center mb-3">
                                    <img src="/api/placeholder/50/50" alt="Photo du client" class="w-10 h-10 rounded-full mr-3 object-cover">
                                    <div>
                                        <h4 class="font-medium">Alexandre Martin</h4>
                                        <p class="text-sm text-gray-600">Juin 2024</p>
                                    </div>
                                </div>
                                <p class="text-gray-700">Appartement idéalement situé pour assister aux matchs. Propre, confortable et hôte très accueillant. Je recommande vivement!</p>
                            </div>
                            
                            <!-- Avis 2 -->
                            <div class="border-t pt-6">
                                <div class="flex items-center mb-3">
                                    <img src="/api/placeholder/50/50" alt="Photo du client" class="w-10 h-10 rounded-full mr-3 object-cover">
                                    <div>
                                        <h4 class="font-medium">Maria Silva</h4>
                                        <p class="text-sm text-gray-600">Mai 2024</p>
                                    </div>
                                </div>
                                <p class="text-gray-700">Nous avons passé un excellent séjour. L'appartement est très bien équipé et l'accès au stade est vraiment facile. L'hôte a été très attentionné et nous a donné d'excellents conseils pour nos déplacements.</p>
                            </div>
                        </div>
                        
                        <button class="mt-6 px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
                            Voir tous les avis
                        </button>
                    </div>
                </div>
                
                <!-- Colonne de réservation -->
                <div>
                    <div class="bg-white p-6 rounded-xl shadow-md sticky top-24">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <span class="text-2xl font-bold">{{ $Annonces[0]->prix }} MAD</span>
                                <span class="text-gray-600">/nuit</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="font-medium">4.8</span>
                                <span class="text-gray-600 ml-1">(42)</span>
                            </div>
                        </div>
                        
                        <form action="{{ route('home') }}" method="POST">
                            @csrf
                            <input type="hidden" name="annonce_id" value="{{ $Annonces[0]->id }}">
                            
                            <div class="border border-gray-300 rounded-lg overflow-hidden mb-4">
                                <div class="grid grid-cols-2">
                                    <div class="p-3 border-r border-b border-gray-300">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Arrivée</label>
                                        <input type="date" name="date_debut" class="w-full border-none p-0 focus:ring-0 text-gray-700" required>
                                    </div>
                                    <div class="p-3 border-b border-gray-300">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Départ</label>
                                        <input type="date" name="date_fin" class="w-full border-none p-0 focus:ring-0 text-gray-700" required>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Voyageurs</label>
                                    <select name="nb_voyageurs" class="w-full border-none p-0 focus:ring-0 text-gray-700 appearance-none" required>
                                        <option value="1">1 voyageur</option>
                                        <option value="2">2 voyageurs</option>
                                        <option value="3">3 voyageurs</option>
                                        <option value="4">4 voyageurs</option>
                                    </select>
                                </div>
                            </div>
                            
                            <button type="submit" class="w-full bg-green-600 text-white py-3 rounded-lg font-medium hover:bg-green-700 transition mb-4">
                                Réserver
                            </button>
                            
                            <p class="text-center text-sm text-gray-600 mb-6">Vous ne serez pas débité pour le moment</p>
                            
                            <div class="space-y-3 text-gray-700">
                                <div class="flex justify-between">
                                    <span>{{ $Annonces[0]->prix }} MAD x 5 nuits</span>
                                    <span>{{ $Annonces[0]->prix * 5 }} MAD</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Frais de service</span>
                                    <span>{{ $Annonces[0]->prix * 0.1 }} MAD</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Taxe de séjour</span>
                                    <span>{{ $Annonces[0]->prix * 0.02 }} MAD</span>
                                </div>
                                <div class="flex justify-between font-bold pt-3 border-t border-gray-200">
                                    <span>Total</span>
                                    <span>{{ $Annonces[0]->prix * 5 + $Annonces[0]->prix * 0.1 + $Annonces[0]->prix * 0.02 }} MAD</span>
                                </div>
                            </div>
                        </form>
                        
                        <div class="mt-6 p-4 bg-green-50 rounded-lg">
                            <div class="flex items-start">
                                <i class="fas fa-calendar-check text-green-600 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-medium mb-1">Disponibilité garantie pour le Mondial</h4>
                                    <p class="text-sm text-gray-700">Cet hébergement est réservé spécifiquement pour les supporters du Mondial 2030.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section Hébergements similaires -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Hébergements similaires à proximité</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Carte hébergement similaire (répétée 4 fois) -->
                @for ($i = 0; $i < 4; $i++)
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/300/200" alt="Hébergement similaire" class="w-full h-48 object-cover">
                        <button class="absolute top-4 right-4 bg-white/70 backdrop-blur-sm p-2 rounded-full hover:bg-white transition">
                            <i class="far fa-heart text-red-500"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-medium text-gray-700">{{ $Annonces[0]->location }} • {{ $Annonces[0]->Country }}</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span>4.7</span>
                            </div>
                        </div>
                        <h3 class="font-bold mb-2 text-lg">Appartement proche du stade</h3>
                        <p class="text-gray-600 text-sm mb-3">Logement confortable idéal pour les supporters du Mondial 2030</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">{{ $Annonces[0]->prix - 200 }} MAD <span class="font-normal text-gray-600 text-sm">/ nuit</span></span>
                            <a href="#" class="text-green-600 font-medium hover:text-green-800">Voir détails</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            
            <div class="mt-8 text-center">
                <a href="{{ route('annonces.index') }}" class="inline-flex items-center px-6 py-3 border border-green-600 text-green-600 font-medium rounded-lg hover:bg-green-50 transition">
                    Voir plus d'hébergements
                    <i class="fas fa-chevron-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>
</x-master-layout>