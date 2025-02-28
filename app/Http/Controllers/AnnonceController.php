<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'location' => ['required', 'string', 'max:255'],
            'photo' => ['required'],
            'description' => ['required', 'string', 'max:255'],
            'prix' => ['required', 'numeric', 'min:0', 'max:10000'],
            'start_date' => ['required', 'date', 'before_or_equal:end_date'], 
            'end_date' => ['required', 'date', 'after_or_equal:start_date'], 
        ]);

        $listing = new Annonce();
        $listing->fill($validation);
        $listing->proprietaire_id = Auth::id(); 
        $listing->status = 'En Attente'; 
        $listing->soft_delete = false; 

        if ($request->hasFile('photo')) {
            
            $photoPath = $request->file('photo')->store('photos', 'public');
            $listing->photo = $photoPath;
        } else {
            $listing->photo =  'photos/annonceDefoult.png';
        }

        $listing->save();
        return redirect()->route('owner.dashbord');
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
    public function edit(Annonce $annonce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Annonce $annonce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annonce $annonce)
    {
        //
    }
}
