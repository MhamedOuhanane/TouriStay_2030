<x-master-layout>
    <!-- Reservation Section -->
    <section id="reservation" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Réservation</h2>
            <div class="max-w-2xl mx-auto bg-green-50 rounded-xl p-8 shadow-md">
                <form action=" {{ route('reservation.store',$annonce->id) }}" method="POST" id="reservationForm" class="space-y-6">
                    @csrf

                    <div class="result block text-gray-700 font-medium mb-2"  id="result">
                        Date de disponibilité : {{ $annonce->start_date . " -> " . $annonce->end_date }}
                    </div>                   
                    <div class="input-group">
                        <input id="daterange" type="text" name="daterange" value="{{Carbon\Carbon::parse($annonce->start_date)->format("m/d/Y")}} - {{Carbon\Carbon::parse($annonce->end_date)->format("m/d/Y")}}" onchange="calculatePrix()" />
                    </div>
                    
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Détail du prix</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Prix par nuit</span>
                                <span id="nuitsPrix" data-prix="{{ $annonce->prix }}" class="font-medium">{{ $annonce->prix }} MAD</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Nombre de nuits</span>
                                <span id="nombreNuits" class="font-medium">-</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Frais de service (<span class="text-red-400">30%</span>)</span>
                                <span id="servicePrix" class="font-medium">{{ $annonce->prix*0.30 }} MAD</span>
                            </div>
                            <hr class="border-t border-gray-200">
                            <div class="flex justify-between text-lg font-bold">
                                <span>Total</span>
                                <div>
                                    <input id="prixTotal" type="number" name="prixTotal" value="" disabled class="w-20"><span>MAD</span>
                                </div>
                            </div>
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
    
    <script>

        reservationDates = [
            @foreach($annonce->reservations as $reservation)
                "{{ \Carbon\Carbon::parse($reservation->start_date)->format('m/d/Y') . ' - ' . \Carbon\Carbon::parse($reservation->end_date)->format('m/d/Y') }}",
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
        
        $('#daterange').daterangepicker({
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
            
        // daterange.addEventListener('change', calculatePrix());
            
            
        function calculatePrix() {
            let x = $("#daterange").val();
            x = x.split(" - ");
            
            let a = moment(x[1], "MM/DD/YYYY");  
            let b = moment(x[0], "MM/DD/YYYY");  
            
            let numberNights = a.diff(b, 'days');
            $("#nombreNuits").html(numberNights);
            
            let unitPrix = $("#nuitsPrix").attr("data-prix");
            let prix = (numberNights * unitPrix).toFixed(2);
            let servicePrix = (prix * 0.30).toFixed(2);
            let total = (parseFloat(prix) + parseFloat(servicePrix)).toFixed(2);
            
            $('#servicePrix').html(servicePrix + " MAD");
            $('#prixTotal').val(total);
        }

    </script>
    
</x-master-layout>