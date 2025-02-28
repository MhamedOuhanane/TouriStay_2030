<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proprietaire extends User
{
    private $fillable = [
        'phone', 
        'city', 
        'Country', 
    ];
    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }
}
