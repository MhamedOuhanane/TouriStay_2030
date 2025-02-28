<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = [
        'location',
        'Country',
        'photo',
        'description',
        'prix',
        'start_date',
        'end_date',
        'status',
        'soft_delete',
    ];

    public function touriste()
    {
        return $this->belongsToMany(Touriste::class);
    }

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }
}
