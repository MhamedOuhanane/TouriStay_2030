<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Proprietaire;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProprietaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('proprietaire.dashboard');
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
    public function show(Proprietaire $proprietaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $listings = Annonce::where('proprietaire_id', Auth::id())
                            ->where('status', 'Accepter')
                            ->get();
        
        return view('proprietaire.profile.edit', [
            'user' => $request->user(),
            'Annonces' => $listings,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proprietaire $proprietaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proprietaire $proprietaire)
    {
        //
    }
}
