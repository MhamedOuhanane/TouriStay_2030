<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Annonces = Annonce::where('status', 'Accepter')->get();
        return view('touriste.Annonces.index', compact('Annonces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proprietaire.profile.createListing');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'Country' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'prix' => ['required', 'numeric', 'min:0', 'max:10000'],
            'start_date' => ['required', 'date', 'before_or_equal:end_date'], 
            'end_date' => ['required', 'date', 'after_or_equal:start_date'], 
        ]);


        $listing = new Annonce();
        $listing->fill($validation);
        $listing->proprietaire_id = Auth::id();  

        if ($request->hasFile('photo')) {
            
            $photoPath = $request->file('photo')->store('photos', 'public');
            $listing->photo = $photoPath;
        } else {
            $listing->photo =  'photos/annonceDefoult.png';
        }

        $listing->save();
        return redirect()->route('owner.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Annonce $annonce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $Annonce = Annonce::find($request->id);
        return view('proprietaire.profile.editListing', compact('Annonce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Annonce $annonce)
    {
        $annonce = Annonce::find($request->id);
        
        $validation = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'Country' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'prix' => ['required', 'numeric', 'min:0', 'max:10000'],
            'start_date' => ['required', 'date', 'before_or_equal:end_date'], 
            'end_date' => ['required', 'date', 'after_or_equal:start_date'], 
        ]);

        $annonce->fill($validation);
        
        $annonce->proprietaire_id = Auth::id();

        if ($annonce->photo != $request->photo) {
            if ($request->hasFile('photo')) {
            
                $photoPath = $request->file('photo')->store('photos', 'public');
                $annonce->photo = $photoPath;
            } else {
                $annonce->photo =  'photos/annonceDefoult.png';
            }
        }

        $annonce->save();        
        return redirect()->route('owner.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $annonce = Annonce::find($request->id);
        
        $annonce->soft_delete = !$annonce->soft_delete;
        $annonce->save();

        return redirect()->route('owner.dashboard');
    }
}
