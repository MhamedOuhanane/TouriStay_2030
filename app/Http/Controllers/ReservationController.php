<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Annonce;
use App\Models\Proprietaire;
use App\Models\Reservation;
use App\Models\Touriste;
use App\Models\User;
use App\Notifications\ReserveNotificate;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::with(['touriste', 'annonce'])->get();

        if (session('role') == 'admine') {
            return view('admin.reservation.index', compact('reservations'));
        } else {
            return view('proprietaire.reservation.index', compact('reservations'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Annonce $annonce)
    {
        return view('touriste.Reservation.form', compact('annonce'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservation = new Reservation();

        $reservation->start_date = session('reservation')['start_date'];
        $reservation->end_date = session('reservation')['end_date'];
        $reservation->prix_totale = session('reservation')['prix'];
        $reservation->touriste_id = Auth::id();
        $reservation->annonce_id = session('reservation')['annonceId'];
        $reservation->reference = 'TS30' . strtoupper(Str::random(10));

        $reservation->save();

        $user = User::find($reservation->touriste_id);
        $owner = Annonce::find($reservation->annonce_id)->proprietaire;

        $user->notify(new ReserveNotificate($reservation));
        $owner->notify(new ReserveNotificate($reservation));

        return redirect()->route('annonce.show',session('reservation')['annonceId']);
    }

    public function redirect(ReservationRequest $request, $id)
    {
        $request->validated();
        $duration = explode(" - ", $request->daterange);
        $start_date = Carbon::parse($duration[0])->format("d-m-Y");
        $end_date = Carbon::parse($duration[1])->format("d-m-Y");
        
        $reservation = [
            'annonceId' => $id,
            'prix' => $request->prixTotal,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        session(['reservation' => $reservation]);
        
        return redirect()->route('reservation.stripe');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
