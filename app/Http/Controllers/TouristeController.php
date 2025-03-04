<?php

namespace App\Http\Controllers;

use App\Models\Admine;
use App\Models\Proprietaire;
use App\Models\Touriste;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TouristeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function show(Touriste $touriste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $touriste = Touriste::find($request->user()->id);
        return view('touriste.profile.edit',[
            'touriste' => $touriste
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Touriste $touriste)
    {
        
        $touriste = Touriste::find($request->user()->id);

        $validation = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $touriste->id],
            'phone' => ['nullable', 'string', 'min:13', 'max:14'],
        ]);

        
        $touriste->first_name = $validation['first_name'];
        $touriste->last_name = $validation['last_name'];
        $touriste->email = $validation['email'];
        
        
        if ($touriste->isDirty('email')) {
            $touriste->email_verified_at = null;
        }
        
        // $user = Auth::user();
        // if ($user->email !== $request->email) {
            //     $user->email = $request->email;
            //     $user->save();
            // }
            
            $touriste->save();

        $User = User::find($touriste->id);
        $proprietaire = Proprietaire::find($request->id);
        $admine = Admine::find($request->id);

        if ($User) {
            $User->first_name = $validation['first_name'];
            $User->last_name = $validation['last_name'];
            $User->email = $validation['email'];
            $User->save();
        }

        if ($proprietaire) {
            $proprietaire->first_name = $validation['first_name'];
            $proprietaire->last_name = $validation['last_name'];
            $proprietaire->email = $validation['email'];   
            $proprietaire->save();
        }

        if ($admine) {
            $admine->first_name = $validation['first_name'];
            $admine->last_name = $validation['last_name'];
            $admine->email = $validation['email'];   
            $admine->save(); 
        }

        return Redirect::route('touriste.profile.update')->with('status', 'profile-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Touriste $touriste)
    {
        //
    }
}
