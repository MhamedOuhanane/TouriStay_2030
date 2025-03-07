<x-dashboard>
    <!-- Main Content -->
    <main class="py-8">
            
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Hébergements</h1>      
        <!-- Hébergements Listing Table -->
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Titre
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Propriétaire
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Emplacement
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Prix / Nuit
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Statut
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($Annonces as $hebergement)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $hebergement->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0 rounded-md overflow-hidden">
                                            <img src="{{ asset('storage/'. $hebergement->photo) }}" alt="Hébergement image" class="h-10 w-10 object-cover">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 truncate max-w-xs">{{ $hebergement->title }}</div>
                                            <div class="text-xs text-gray-500">{{ $hebergement->type }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm text-gray-900">{{ $hebergement->proprietaire->getFullNameAttribute() }}</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $hebergement->location }}, {{ $hebergement->country }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">${{ $hebergement->prix }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $colour[$hebergement->status] }}">
                                        {{ $hebergement->status }}
                                    </span>
                                </td>
                                @if ($hebergement->status == 'En Attente')
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex space-x-4">
                                            <a href="{{ route('admine.annonce.update',['annonce' => $hebergement, 'status' => 'Accepter']) }}" class="text-green-600 hover:text-green-900">
                                                <i class="fa fa-check"></i>
                                            </a>
                                            <a href="{{ route('admine.annonce.update',['annonce' => $hebergement, 'status' => 'Refuser']) }}" class="text-red-600 hover:text-red-900">
                                                <i class="fa fa-ban"></i>
                                            </a>
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</x-dashboard>