<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil TouriStay 2030</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-blue-600 text-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fas fa-globe-africa text-2xl"></i>
                <span class="font-bold text-xl">TouriStay 2030</span>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#" class="hover:text-blue-200"><i class="fas fa-search mr-1"></i> Rechercher</a>
                <a href="#" class="hover:text-blue-200"><i class="fas fa-heart mr-1"></i> Favoris</a>
                <div class="relative">
                    <button class="flex items-center hover:text-blue-200">
                        <i class="fas fa-user-circle text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Bannière -->
    <div class="bg-gradient-to-r from-blue-500 to-green-400 h-32 flex items-center justify-center text-white">
        <h1 class="text-3xl font-bold">Mon Profil</h1>
    </div>

    <!-- Contenu principal -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Sidebar -->
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <div class="flex flex-col items-center">
                        <div class="h-32 w-32 bg-gray-200 rounded-full overflow-hidden mb-4">
                            <img src="/api/placeholder/200/200" alt="Photo de profil" class="h-full w-full object-cover">
                        </div>
                        <h2 class="text-xl font-semibold">Mohamed Alami</h2>
                        <p class="text-gray-600 mb-2">Propriétaire</p>
                        <p class="text-gray-600 mb-4">Membre depuis Janvier 2023</p>
                        <button class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition w-full">
                            <i class="fas fa-camera mr-2"></i>Changer la photo
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold mb-4">Menu</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex items-center text-blue-600 font-medium">
                                <i class="fas fa-user-cog w-8"></i>
                                Informations personnelles
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-blue-600">
                                <i class="fas fa-home w-8"></i>
                                Mes annonces
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-blue-600">
                                <i class="fas fa-heart w-8"></i>
                                Favoris
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-blue-600">
                                <i class="fas fa-comment-alt w-8"></i>
                                Messages
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-blue-600">
                                <i class="fas fa-history w-8"></i>
                                Historique
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-blue-600">
                                <i class="fas fa-shield-alt w-8"></i>
                                Sécurité
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-red-600">
                                <i class="fas fa-sign-out-alt w-8"></i>
                                Déconnexion
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contenu principal -->
            <div class="md:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-semibold">Informations personnelles</h3>
                        <button class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-edit"></i> Modifier
                        </button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Nom complet</label>
                            <input type="text" value="Mohamed Alami" class="w-full p-2 border border-gray-300 rounded bg-gray-50" readonly>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Email</label>
                            <input type="email" value="mohamed.alami@gmail.com" class="w-full p-2 border border-gray-300 rounded bg-gray-50" readonly>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Téléphone</label>
                            <input type="tel" value="+212 6 12 34 56 78" class="w-full p-2 border border-gray-300 rounded bg-gray-50" readonly>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Date de naissance</label>
                            <input type="text" value="15/03/1985" class="w-full p-2 border border-gray-300 rounded bg-gray-50" readonly>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Adresse</label>
                            <input type="text" value="123 Rue Hassan II, Casablanca" class="w-full p-2 border border-gray-300 rounded bg-gray-50" readonly>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Pays</label>
                            <input type="text" value="Maroc" class="w-full p-2 border border-gray-300 rounded bg-gray-50" readonly>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Langue</label>
                            <input type="text" value="Français, Arabe, Anglais" class="w-full p-2 border border-gray-300 rounded bg-gray-50" readonly>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-1">Type de compte</label>
                            <input type="text" value="Propriétaire" class="w-full p-2 border border-gray-300 rounded bg-gray-50" readonly>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-semibold">Mes annonces récentes</h3>
                        <a href="#" class="text-blue-600 hover:text-blue-800">Voir toutes mes annonces</a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Annonce 1 -->
                        <div class="border rounded-lg overflow-hidden hover:shadow-lg transition">
                            <div class="h-48 bg-gray-200 relative">
                                <img src="/api/placeholder/400/300" alt="Appartement" class="h-full w-full object-cover">
                                <span class="absolute top-2 right-2 bg-green-500 text-white px-2 py-1 rounded text-sm">Actif</span>
                            </div>
                            <div class="p-4">
                                <h4 class="font-semibold text-lg mb-1">Appartement vue mer</h4>
                                <p class="text-gray-600 mb-2"><i class="fas fa-map-marker-alt mr-1"></i> Tanger, Maroc</p>
                                <p class="text-blue-600 font-bold mb-2">950 DH / nuit</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center text-amber-500">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="text-gray-600 ml-1">(18)</span>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Annonce 2 -->
                        <div class="border rounded-lg overflow-hidden hover:shadow-lg transition">
                            <div class="h-48 bg-gray-200 relative">
                                <img src="/api/placeholder/400/300" alt="Villa" class="h-full w-full object-cover">
                                <span class="absolute top-2 right-2 bg-green-500 text-white px-2 py-1 rounded text-sm">Actif</span>
                            </div>
                            <div class="p-4">
                                <h4 class="font-semibold text-lg mb-1">Villa avec piscine</h4>
                                <p class="text-gray-600 mb-2"><i class="fas fa-map-marker-alt mr-1"></i> Marrakech, Maroc</p>
                                <p class="text-blue-600 font-bold mb-2">1800 DH / nuit</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center text-amber-500">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="text-gray-600 ml-1">(27)</span>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-semibold">Statistiques du profil</h3>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="bg-blue-50 rounded-lg p-4 border border-blue-100">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Annonces actives</p>
                                    <p class="text-2xl font-bold">7</p>
                                </div>
                                <div class="bg-blue-100 p-3 rounded-full text-blue-600">
                                    <i class="fas fa-home"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-green-50 rounded-lg p-4 border border-green-100">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Réservations</p>
                                    <p class="text-2xl font-bold">12</p>
                                </div>
                                <div class="bg-green-100 p-3 rounded-full text-green-600">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-amber-50 rounded-lg p-4 border border-amber-100">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Évaluation</p>
                                    <p class="text-2xl font-bold">4.7 / 5</p>
                                </div>
                                <div class="bg-amber-100 p-3 rounded-full text-amber-600">
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-purple-50 rounded-lg p-4 border border-purple-100">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Revenus</p>
                                    <p class="text-2xl font-bold">24 500 DH</p>
                                </div>
                                <div class="bg-purple-100 p-3 rounded-full text-purple-600">
                                    <i class="fas fa-wallet"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12 py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-lg font-semibold mb-4">TouriStay 2030</h4>
                    <p class="text-gray-400">La plateforme officielle d'hébergement pour le Mondial 2030 au Maroc, en Espagne et au Portugal.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Liens rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Accueil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Explorer</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Devenir hôte</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Aide</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-envelope w-6"></i> info@touristay2030.com
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-phone w-6"></i> +212 5 22 33 44 55
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-map-marker-alt w-6"></i> Casablanca, Maroc
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Suivez-nous</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-blue-600 p-2 rounded-full hover:bg-blue-700"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="bg-blue-400 p-2 rounded-full hover:bg-blue-500"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="bg-pink-600 p-2 rounded-full hover:bg-pink-700"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="bg-blue-800 p-2 rounded-full hover:bg-blue-900"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-400 mb-2">Inscrivez-vous à notre newsletter</p>
                        <div class="flex">
                            <input type="email" placeholder="Votre email" class="p-2 rounded-l w-full">
                            <button class="bg-blue-600 px-4 rounded-r hover:bg-blue-700">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
                <p>&copy; 2023 TouriStay 2030. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

</body>
</html>




{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TouriStay 2030 - Accueil</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-blue-600 text-white shadow-md fixed w-full z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fas fa-globe-africa text-2xl"></i>
                <span class="font-bold text-xl">TouriStay 2030</span>
            </div>
            <div class="hidden md:flex items-center space-x-6">
                <a href="#" class="hover:text-blue-200">Accueil</a>
                <a href="#" class="hover:text-blue-200">Explorer</a>
                <a href="#" class="hover:text-blue-200">Devenir hôte</a>
                <a href="#" class="hover:text-blue-200">À propos</a>
                <a href="#" class="hover:text-blue-200">Contact</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#" class="hover:text-blue-200"><i class="fas fa-search mr-1"></i> Rechercher</a>
                <a href="#" class="hover:text-blue-200"><i class="fas fa-heart mr-1"></i> Favoris</a>
                <div class="relative">
                    <button class="flex items-center hover:text-blue-200">
                        <i class="fas fa-user-circle text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center bg-black">
        <div class="absolute inset-0 z-0">
            <img src="/api/placeholder/1920/1080" alt="Mondial 2030" class="w-full h-full object-cover opacity-60">
        </div>
        <div class="container mx-auto px-4 z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">TouriStay 2030</h1>
            <p class="text-xl md:text-2xl text-white mb-8">Trouvez l'hébergement idéal pour le Mondial 2030 au Maroc, en Espagne et au Portugal</p>
            <div class="inline-flex">
                <a href="#search" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg mr-4 transition">
                    Rechercher un hébergement
                </a>
                <a href="#" class="bg-white hover:bg-gray-100 text-blue-600 font-bold py-3 px-6 rounded-lg transition">
                    Publier une annonce
                </a>
            </div>
        </div>
        <div class="absolute bottom-0 w-full flex justify-center pb-8">
            <a href="#search" class="text-white animate-bounce">
                <i class="fas fa-chevron-down text-3xl"></i>
            </a>
        </div>
    </section>

    <!-- Search Section -->
    <section id="search" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Trouvez l'hébergement parfait pour votre séjour</h2>
            
            <!-- Search Bar -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8 max-w-5xl mx-auto">
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label for="location" class="block text-gray-700 text-sm font-medium mb-2">Destination</label>
                            <div class="relative">
                                <select id="location" class="w-full p-3 border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Sélectionnez une ville</option>
                                    <option value="casablanca">Casablanca, Maroc</option>
                                    <option value="rabat">Rabat, Maroc</option>
                                    <option value="marrakech">Marrakech, Maroc</option>
                                    <option value="tanger">Tanger, Maroc</option>
                                    <option value="madrid">Madrid, Espagne</option>
                                    <option value="barcelona">Barcelone, Espagne</option>
                                    <option value="lisbonne">Lisbonne, Portugal</option>
                                    <option value="porto">Porto, Portugal</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                    <i class="fas fa-map-marker-alt text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="check-in" class="block text-gray-700 text-sm font-medium mb-2">Arrivée</label>
                            <div class="relative">
                                <input type="date" id="check-in" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                    <i class="fas fa-calendar text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="check-out" class="block text-gray-700 text-sm font-medium mb-2">Départ</label>
                            <div class="relative">
                                <input type="date" id="check-out" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                    <i class="fas fa-calendar text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="guests" class="block text-gray-700 text-sm font-medium mb-2">Voyageurs</label>
                            <div class="relative">
                                <select id="guests" class="w-full p-3 border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="1">1 personne</option>
                                    <option value="2">2 personnes</option>
                                    <option value="3">3 personnes</option>
                                    <option value="4">4 personnes</option>
                                    <option value="5">5 personnes</option>
                                    <option value="6+">6+ personnes</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                    <i class="fas fa-users text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center">
                        <button type="submit" class="bg-blue-600 text-white py-3 px-8 rounded-lg hover:bg-blue-700 transition flex items-center">
                            <i class="fas fa-search mr-2"></i>
                            Rechercher
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Filter Options -->
            <div class="bg-gray-50 rounded-lg p-6 mb-8 max-w-5xl mx-auto">
                <div class="flex flex-col md:flex-row items-center justify-between mb-4">
                    <h3 class="text-xl font-semibold mb-4 md:mb-0">Filtres avancés</h3>
                    
                    <div class="flex flex-wrap gap-4">
                        <!-- Price Filter -->
                        <div class="relative">
                            <select class="bg-white border border-gray-300 rounded-lg py-2 px-4 appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Prix</option>
                                <option value="0-500">0-500 DH</option>
                                <option value="500-1000">500-1000 DH</option>
                                <option value="1000-2000">1000-2000 DH</option>
                                <option value="2000+">2000+ DH</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-500 text-xs"></i>
                            </div>
                        </div>
                        
                        <!-- Property Type Filter -->
                        <div class="relative">
                            <select class="bg-white border border-gray-300 rounded-lg py-2 px-4 appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Type de logement</option>
                                <option value="apartment">Appartement</option>
                                <option value="house">Maison</option>
                                <option value="villa">Villa</option>
                                <option value="studio">Studio</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-500 text-xs"></i>
                            </div>
                        </div>
                        
                        <!-- Amenities Filter -->
                        <div class="relative">
                            <select class="bg-white border border-gray-300 rounded-lg py-2 px-4 appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Équipements</option>
                                <option value="wifi">WiFi</option>
                                <option value="pool">Piscine</option>
                                <option value="ac">Climatisation</option>
                                <option value="kitchen">Cuisine équipée</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-500 text-xs"></i>
                            </div>
                        </div>
                        
                        <!-- Results per page -->
                        <div class="relative">
                            <select class="bg-white border border-gray-300 rounded-lg py-2 px-4 appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="4">4 par page</option>
                                <option value="10">10 par page</option>
                                <option value="25">25 par page</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-500 text-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Active Filters -->
                <div class="flex flex-wrap gap-2 mt-4">
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm flex items-center">
                        Prix: 500-1000 DH
                        <button class="ml-2 text-blue-600 hover:text-blue-800">
                            <i class="fas fa-times"></i>
                        </button>
                    </span>
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm flex items-center">
                        WiFi
                        <button class="ml-2 text-blue-600 hover:text-blue-800">
                            <i class="fas fa-times"></i>
                        </button>
                    </span>
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm flex items-center">
                        Climatisation
                        <button class="ml-2 text-blue-600 hover:text-blue-800">
                            <i class="fas fa-times"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Featured Listings -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold">Hébergements populaires</h2>
                <div class="flex space-x-2">
                    <button class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center hover:bg-blue-700 transition">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center hover:bg-blue-700 transition">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Listing 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Appartement" class="w-full h-56 object-cover">
                        <button class="absolute top-2 right-2 bg-white p-2 rounded-full text-gray-600 hover:text-red-600 transition">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-lg">Appartement moderne</h3>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="ml-1">4.8 (24)</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-2"><i class="fas fa-map-marker-alt mr-1"></i> Casablanca, Maroc</p>
                        <p class="text-gray-600 mb-3 text-sm">À 5 min du stade Mohammed V</p>
                        <div class="flex text-sm text-gray-600 mb-4">
                            <span class="mr-2"><i class="fas fa-user mr-1"></i> 4</span>
                            <span class="mr-2"><i class="fas fa-bed mr-1"></i> 2</span>
                            <span><i class="fas fa-bath mr-1"></i> 1</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="font-bold text-blue-600">750 DH <span class="text-gray-500 font-normal">/ nuit</span></p>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Voir détails</a>
                        </div>
                    </div>
                </div>
                
                <!-- Listing 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Villa" class="w-full h-56 object-cover">
                        <button class="absolute top-2 right-2 bg-white p-2 rounded-full text-gray-600 hover:text-red-600 transition">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-lg">Villa avec piscine</h3>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="ml-1">4.9 (38)</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-2"><i class="fas fa-map-marker-alt mr-1"></i> Marrakech, Maroc</p>
                        <p class="text-gray-600 mb-3 text-sm">À 15 min du stade Grand Marrakech</p>
                        <div class="flex text-sm text-gray-600 mb-4">
                            <span class="mr-2"><i class="fas fa-user mr-1"></i> 8</span>
                            <span class="mr-2"><i class="fas fa-bed mr-1"></i> 4</span>
                            <span><i class="fas fa-bath mr-1"></i> 3</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="font-bold text-blue-600">1800 DH <span class="text-gray-500 font-normal">/ nuit</span></p>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Voir détails</a>
                        </div>
                    </div>
                </div>
                
                <!-- Listing 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Appartement" class="w-full h-56 object-cover">
                        <button class="absolute top-2 right-2 bg-white p-2 rounded-full text-gray-600 hover:text-red-600 transition">
                            <i class="fas fa-heart text-red-600"></i>
                        </button>
                        <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs">Populaire</span>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-lg">Studio au centre-ville</h3>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="ml-1">4.7 (19)</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-2"><i class="fas fa-map-marker-alt mr-1"></i> Rabat, Maroc</p>
                        <p class="text-gray-600 mb-3 text-sm">À 8 min du stade Moulay Abdallah</p>
                        <div class="flex text-sm text-gray-600 mb-4">
                            <span class="mr-2"><i class="fas fa-user mr-1"></i> 2</span>
                            <span class="mr-2"><i class="fas fa-bed mr-1"></i> 1</span>
                            <span><i class="fas fa-bath mr-1"></i> 1</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="font-bold text-blue-600">550 DH <span class="text-gray-500 font-normal">/ nuit</span></p>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Voir détails</a>
                        </div>
                    </div>
                </div>
                
                <!-- Listing 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Maison" class="w-full h-56 object-cover">
                        <button class="absolute top-2 right-2 bg-white p-2 rounded-full text-gray-600 hover:text-red-600 transition">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-lg">Maison traditionnelle</h3>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="ml-1">4.6 (15)</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-2"><i class="fas fa-map-marker-alt mr-1"></i> Tanger, Maroc</p>
                        <p class="text-gray-600 mb-3 text-sm">À 10 min du Grand Stade de Tanger</p>
                        <div class="flex text-sm text-gray-600 mb-4">
                            <span class="mr-2"><i class="fas fa-user mr-1"></i> 6</span>
                            <span class="mr-2"><i class="fas fa-bed mr-1"></i> 3</span>
                            <span><i class="fas fa-bath mr-1"></i> 2</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="font-bold text-blue-600">950 DH <span class="text-gray-500 font-normal">/ nuit</span></p>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Voir détails</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="flex justify-center mt-8">
                <div class="flex items-center space-x-2">
                    <a href="#" class="w-10 h-10 border border-gray-300 rounded-lg flex items-center justify-center hover:bg-gray-100">
                        <i class="fas fa-chevron-left text-gray-600"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-600 text-white rounded-lg flex items-center justify-center">1</a>
                    <a href="#" class="w-10 h-10 border border-gray-300 rounded-lg flex items-center justify-center hover:bg-gray-100">2</a>
                    <a href="#" class="w-10 h-10 border border-gray-300 rounded-lg flex items-center justify-center hover:bg-gray-100">3</a>
                    <span class="text-gray-600">...</span>
                    <a href="#" class="w-10 h-10 border border-gray-300 rounded-lg flex items-center justify-center hover:bg-gray-100">10</a>
                    <a href="#" class="w-10 h-10 border border-gray-300 rounded-lg flex items-center justify-center hover:bg-gray-100">
                        <i class="fas fa-chevron-right text-gray-600"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Destinations Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Destinations populaires</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Maroc -->
                <div class="bg-gray-900 rounded-lg overflow-hidden relative group">
                    <img src="/api/placeholder/640/480" alt="Maroc" class="w-full h-80 object-cover opacity-70 group-hover:opacity-50 transition">
                    <div class="absolute inset-0 flex flex-col justify-end p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Maroc</h3>
                        <p class="text-white mb-4">Découvrez les villes hôtes: Casablanca, Rabat, Marrakech, Tanger, Agadir</p>
                        <a href="#" class="text-white flex items-center font-medium group-hover:underline">
                            Explorer <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Espagne -->
                <div class="bg-gray-900 rounded-lg overflow-hidden relative group">
                    <img src="/api/placeholder/640/480" alt="Espagne" class="w-full h-80 object-cover opacity-70 group-hover:opacity-50 transition">
                    <div class="absolute inset-0 flex flex-col justify-end p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Espagne</h3>
                        <p class="text-white mb-4">Découvrez les villes hôtes: Madrid, Barcelone, Valence, Séville</p>
                        <a href="#" class="text-white flex items-center font-medium group-hover:underline">
                            Explorer <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Portugal -->
                <div class="bg-gray-900 rounded-lg overflow-hidden relative group">
                    <img src="/api/placeholder/640/480" alt="Portugal" class="w-full h-80 object-cover opacity-70 group-hover:opacity-50 transition">
                    <div class="absolute inset-0 flex flex-col justify-end p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Portugal</h3>
                        <p class="text-white mb-4">Découvrez les villes hôtes: Lisbonne, Porto, Braga</p>
                        <a href="#" class="text-white flex items-center font-medium group-hover:underline">
                            Explorer <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Benefits/Features Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Pourquoi choisir TouriStay 2030?</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Réservations sécurisées</h3>
                    <p class="text-gray-600">Système de paiement sécurisé et vérification des identités pour des transactions en toute tranquillité.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marked-alt text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Emplacements stratégiques</h3>
                    <p class="text-gray-600">Hébergements situés à proximité des stades et des transports publics pour un accès facile aux événements.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Support 24/7</h3>
                    <p class="text-gray-600">Une équipe dédiée disponible à tout moment pour vous assister pendant votre séjour.</p>
                </div>
            </div>
        </div>
    </section> --}}