<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Annonce;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(ReservationRequest $request, $id)
    {
        $request->validated();
        $duration = explode(" - ", $request->daterange);
        $start_date = Carbon::parse($duration[0])->format("d-m-Y");
        $end_date = Carbon::parse($duration[1])->format("d-m-Y");
        
        $reservation = [
            'annonceId' => $id,
            'prixTotal' => $request->prixTotal,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
        session(['reservation' => $reservation]);
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
