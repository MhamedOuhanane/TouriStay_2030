<x-master-layout>
    <!-- Reservation Section -->
    <section id="reservation" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Réservation</h2>
            <div class="max-w-2xl mx-auto bg-green-50 rounded-xl p-8 shadow-md">
                <form action=" {{ route('reservation.store') }}" method="POST" id="reservationForm" class="space-y-6">
                    @csrf

                    <div class="result block text-gray-700 font-medium mb-2"  id="result">
                        Date de disponibilité : {{ $annonce->start_date . " -> " . $annonce->end_date }}
                    </div>                   
                    <div class="input-group">
                        <input type="text" name="daterange" value="" />
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
                        {{-- <div class="grid grid-cols-3 gap-4">
                            @php
                                $methodesPaiement = [
                                    ['icon' => 'fab fa-paypal', 'value' => 'paypal', 'label' => 'PayPal', 'color' => 'blue-600'],
                                ];
                            @endphp
                            @foreach($methodesPaiement as $methode)
                                <label class="border rounded-lg p-4 text-center hover:bg-green-50 transition cursor-pointer">
                                    <input type="radio" name="paiement" value="{{ $methode['value'] }}" class="hidden" required>
                                    <i class="{{ $methode['icon'] }} text-2xl mb-2 text-{{ $methode['color'] }}"></i>
                                    <span class="block text-sm">{{ $methode['label'] }}</span>
                                </label>
                            @endforeach
                        </div> --}}
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
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            reservationDates = [
                @foreach($annonce->reservations as $reservation)
                    "{{ Carbon\Carbon::parse($reservation->start_date)->format("m/d/Y") . " - " .  Carbon\Carbon::parse($reservation->end_date)->format("m/d/Y")}}" ,
                @endforeach
            ];
            resDates = [];
            $.map(reservationDates, function (element) {
                element = element.split(" - ")
                element = $.map(element, function(el){
                    return Date.parse(el);
                });
                resDates.push(element);
            });
            
            $('input[name="daterange"]').daterangepicker({
                opens: 'left',
                minDate: "{{Carbon\Carbon::parse($annonce->start_date)->format("m/d/Y")}}",
                maxDate: "{{Carbon\Carbon::parse($annonce->end_date)->format("m/d/Y")}}",
                isInvalidDate: function(date) {
                    for(resDate of resDates){
                        if(date <= resDate[1] && date >=resDate[0]){
                            return true;
                        }
                    }
                }
            });
            
        });

    </script>
    
</x-master-layout>