<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\favoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavorisController extends Controller
{
    public function store(Annonce $annonce)
    {
        $touriste_id = Auth::id();
        $annonce_id = $annonce->id;

        $annonce->is_favorited = $annonce->touristes()->where('touriste_id', $touriste_id)->exists();

        if ($annonce->is_favorited) {
            $annonce->touristes()->detach($touriste_id);
        } else {
            $annonce->touristes()->attach($touriste_id);
        }

        return redirect()->route('annonces.index');
    }
}
