<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Proprietaire;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProprietaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colour = [
            'En Attente' => "bg-yellow-100 text-yellow-800", 
            'Accepter' => "bg-green-100 text-green-800", 
            'Refuser' => "bg-red-100 text-red-800"
        ];

        $Annonces = Annonce::where('proprietaire_id', Auth::id())->get();
        return view('proprietaire.dashboard', compact('Annonces', 'colour'));
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
        $owner = Proprietaire::find($request->user()->id);
        return view('proprietaire.profile.edit', [
            'owner' => $owner,
            'Annonces' => $listings,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proprietaire $owner)
    {
        
        $owner = Proprietaire::find($request->user()->id);

        $validation = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $owner->id],
            'phone' => ['nullable', 'string', 'min:13', 'max:14'],
            'city' => ['nullable', 'string', 'max:255'],
            'Country' => ['nullable', 'in:Morocco,Spain,Portugal,Other'],
        ]);
        
        $owner->first_name = $validation['first_name'];
        $owner->last_name = $validation['last_name'];
        $owner->email = $validation['email'];
        $owner->phone = $validation['phone'];
        $owner->city = $validation['city'];
        $owner->Country = $validation['Country'];

        if ($owner->isDirty('email')) {
            $owner->email_verified_at = null;
        }
        
        // $user = Auth::user();
        // if ($user->email !== $request->email) {
            //     $user->email = $request->email;
            //     $user->save();
            // }
            
            $owner->save();

        return Redirect::route('owner.profile')->with('status', 'profile-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proprietaire $proprietaire)
    {
        //
    }
}
