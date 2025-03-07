<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Touriste;
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
        $userId = Auth::id();
                
        if (session('role') == 'touriste') {
            $paginateTerm = 4;

            $Annonces = Annonce::where([['status', '=', 'Accepter'], ['soft_delete', '=', false]])
                            ->paginate($paginateTerm);

            foreach ($Annonces as $annonce) {
                $annonce->is_favorited = $annonce->touristes()->where('touriste_id', $userId)->exists();
            }
            
            return view('touriste.Annonces.index', compact('Annonces', 'paginateTerm'));

        } elseif (session('role') == 'admine') {
            $colour = [
                'En Attente' => "bg-yellow-100 text-yellow-800", 
                'Accepter' => "bg-green-100 text-green-800", 
                'Refuser' => "bg-red-100 text-red-800"
            ];

            $Annonces = Annonce::where('soft_delete', 'false')->get();
            return view('admin.annonce.index', compact('Annonces', 'colour'));
        }
    }

    public function filtrage(Request $request)
    {

        $Annonces = Annonce::query();
        
        $searchTerm = $request->search; 
        $paginateTerm = is_numeric($request->pagination) ? (int) $request->pagination : 4;

        if ($searchTerm) {
            $Annonces = $Annonces->where(function ($query) use ($searchTerm) {
                $query->where('title', 'ILIKE', "%{$searchTerm}%")
                      ->orWhere('location', 'ILIKE', "%{$searchTerm}%");
            });
        }

        $Annonces = $Annonces->paginate($paginateTerm); 
        // return view('client.temoignages.index', compact('temoignages', 'searchTerm', 'paginateTerm','trieTerm'));
        return view('touriste.Annonces.index', compact('Annonces', 'searchTerm', 'paginateTerm'));
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
            'start_date' => ['required', 'date', 'before_or_equal:end_date', 'regex:/^2030/'], 
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
        return view('touriste.Annonces.show', compact('annonce'));
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
        if (session('role') == 'proprietaire') {
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
                } 
            }

            $annonce->save();        
            return redirect()->route('owner.dashboard');
        } else if (session('role') == 'admine') {
            $annonce->status = $request->status;
            $annonce->save();

            return redirect()->route('annonce.admin');
        }
        
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
