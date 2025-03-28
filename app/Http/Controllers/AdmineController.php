<?php

namespace App\Http\Controllers;

use App\Models\Admine;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdmineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Reservations = Reservation::all();
        $Users = User::distinct()->get();
        $totalRevenus = Reservation::sum('prix_totale');
        return view('admin.dashboard', compact('Users', 'Reservations', 'totalRevenus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admine $admine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admine $admine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admine $admine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admine $admine)
    {
        //
    }
}
