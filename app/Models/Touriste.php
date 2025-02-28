<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Touriste extends User
{
    public function annonces()
    {
        return $this->belongsToMany(Annonce::class);
    }
}
