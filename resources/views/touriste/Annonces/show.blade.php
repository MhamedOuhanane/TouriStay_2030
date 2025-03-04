<x-master-layout>
    <section class="bg-green-50 py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-10">
                <!-- Image Gallery -->
                <div>
                    <div class="mb-6">
                        <img src="{{ asset('storage/' . $annonce->photo) }}" alt="{{ $annonce->title }}" class="w-full h-96 object-cover rounded-xl shadow-md">
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        @for($i = 1; $i <= 4; $i++)
                            <img src="{{ asset('storage/' . $annonce->photo) }}" alt="Secondary image {{ $i }}" class="w-full h-24 object-cover rounded-lg">
                        @endfor
                    </div>
                </div>
    
                <!-- Accommodation Details -->
                <div>
                    <div class="flex justify-between items-center mb-4">
                        <h1 class="text-3xl font-bold text-gray-800">{{ $annonce->title }}</h1>
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <span class="font-medium">4.8 (24 avis)</span>
                        </div>
                    </div>
    
                    <div class="flex items-center text-gray-600 mb-4">
                        <i class="fas fa-map-marker-alt mr-2 text-green-600"></i>
                        <span>{{ $annonce->location }}, {{ $annonce->Country }}</span>
                    </div>
    
                    <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                        <h2 class="text-xl font-semibold mb-4 text-gray-800">Description</h2>
                        <p class="text-gray-600 mb-4">{{ $annonce->description }}</p>
    
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <i class="fas fa-home text-green-600 mr-2"></i>
                                <span>Type de logement: Appartement</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-users text-green-600 mr-2"></i>
                                <span>Capacité: 4 personnes</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-bed text-green-600 mr-2"></i>
                                <span>2 chambres</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-wifi text-green-600 mr-2"></i>
                                <span>Wi-Fi gratuit</span>
                            </div>
                        </div>
                    </div>
    
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <h2 class="text-xl font-semibold mb-4 text-gray-800">Équipements</h2>
                        <div class="flex flex-wrap gap-2">
                            @php
                                $equipements = [
                                    'Cuisine équipée', 
                                    'Machine à laver', 
                                    'Climatisation', 
                                    'Parking', 
                                    'Terrasse'
                                ];
                            @endphp
                            @foreach($equipements as $equipement)
                                <span class="bg-green-50 text-green-700 text-sm py-1 px-2 rounded">
                                    {{ $equipement }}
                                </span>
                            @endforeach
                        </div>
                    </div>
    
                    <div class="mt-6 flex justify-between items-center">
                        <div>
                            <span class="text-2xl font-bold text-gray-800">{{ $annonce->prix }} MAD</span>
                            <span class="text-gray-600 ml-1">/ nuit</span>
                        </div>
                        <a href="{{ route('reservation.form',$annonce) }}" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition">
                            Réserver maintenant
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-master-layout>