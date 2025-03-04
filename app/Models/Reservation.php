<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'start_date',
        'end_date',
        'prix_totale',
        'touriste_id',
        'annonce_id',
    ];

    public function touriste()
    {
        return $this->belongsTo(Touriste::class);
    }

    public function annonce()
    {
        return $this->belongsTo(Annonce::class);
    }
}
