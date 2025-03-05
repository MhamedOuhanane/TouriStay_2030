<x-master-layout>
    <!-- Reservation Section -->
    <section id="reservation" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Réservation</h2>
            <div class="max-w-2xl mx-auto bg-green-50 rounded-xl p-8 shadow-md">
                <form action=" " method="POST" id="reservationForm" class="space-y-6">
                    @csrf
                    <input type="hidden" name="annonce_id" value="{{ $annonce->id }}">

                    
                    <div class="result block text-gray-700 font-medium mb-2"  id="result">Aucune date sélectionnée</div>                   
                    <div class="input-group flex gap-3">
                        <input type="text" id="start_date" class="date-picker" placeholder="  Sélectionner une date" />
                        <input type="text" id="end_date" class="date-picker" placeholder="  Sélectionner une date" />
                    </div>
                    
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Détail du prix</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Prix par nuit</span>
                                <span class="font-medium">{{ $annonce->prix }} MAD</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Nombre de nuits</span>
                                <span id="nombreNuits" class="font-medium">-</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Frais de service (<span class="text-red-400">15%</span>)</span>
                                <span class="font-medium">500 MAD</span>
                            </div>
                            <hr class="border-t border-gray-200">
                            <div class="flex justify-between text-lg font-bold">
                                <span>Total</span>
                                <span id="prixTotal">- MAD</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Méthode de paiement</label>
                        <div class="grid grid-cols-3 gap-4">
                            @php
                                $methodesPaiement = [
                                    ['icon' => 'fa-paypal', 'value' => 'paypal', 'label' => 'PayPal', 'color' => 'blue-600'],
                                ];
                            @endphp
                            @foreach($methodesPaiement as $methode)
                                <label class="border rounded-lg p-4 text-center hover:bg-green-50 transition cursor-pointer">
                                    <input type="radio" name="paiement" value="{{ $methode['value'] }}" class="hidden" required>
                                    <i class="fas {{ $methode['icon'] }} text-2xl mb-2 text-{{ $methode['color'] }}"></i>
                                    <span class="block text-sm">{{ $methode['label'] }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    
                    <button 
                        type="submit" 
                        class="w-full bg-green-600 text-white py-4 rounded-lg hover:bg-green-700 transition text-lg font-medium"
                    >
                        Réserver et Payer
                    </button>
                </form>
            </div>
        </div>
    </section>

    @push('scripts')
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dateArrivee = document.getElementById('dateArrivee');
            const dateDepart = document.getElementById('dateDepart');
            const nombreNuitsSpan = document.getElementById('nombreNuits');
            const prixTotalSpan = document.getElementById('prixTotal');
            const prixNuit = {{ $annonce->prix }};
            const fraisService = 500;

            function calculateNights() {
                if (dateArrivee.value && dateDepart.value) {
                    const arrivee = new Date(dateArrivee.value);
                    const depart = new Date(dateDepart.value);
                    
                    if (depart <= arrivee) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Dates invalides',
                            text: 'La date de départ doit être après la date d\'arrivée'
                        });
                        dateDepart.value = '';
                        return;
                    }

                    const timeDiff = depart.getTime() - arrivee.getTime();
                    const nombreNuits = Math.ceil(timeDiff / (1000 * 3600 * 24));
                    
                    nombreNuitsSpan.textContent = nombreNuits + ' nuit(s)';
                    
                    const prixTotal = (nombreNuits * prixNuit) + fraisService;
                    prixTotalSpan.textContent = prixTotal.toLocaleString() + ' MAD';
                }
            }

            dateArrivee.addEventListener('change', calculateNights);
            dateDepart.addEventListener('change', calculateNights);

            // Form validation
            document.getElementById('reservationForm').addEventListener('submit', function(e) {
                const methodesPaiement = document.querySelectorAll('input[name="paiement"]');
                const isPaiementSelected = Array.from(methodesPaiement).some(radio => radio.checked);

                if (!isPaiementSelected) {
                    e.preventDefault();
                    Swal.fire({
                        icon: 'error',
                        title: 'Méthode de paiement',
                        text: 'Veuillez sélectionner une méthode de paiement'
                    });
                }
            });
        });
    </script> --}}
    <script>
         var picker = new Lightpick({
            field: document.getElementById('start_date'),
            secondField: document.getElementById('end_date'),
            singleDate: false,
            onSelect: function(start, end){
                var str = '';
                str += start ? start.format('Do MMMM YYYY') + ' إلى ' : '';
                str += end ? end.format('Do MMMM YYYY') : '...';
                document.getElementById('result-3').innerHTML = str;
            }
        });

        // Reset function for clearing the selected dates
        function resetSelection() {
            document.getElementById('start_date').value = '';
            document.getElementById('result').innerHTML = 'Aucune date sélectionnée';
        }
    </script>
</x-master-layout>