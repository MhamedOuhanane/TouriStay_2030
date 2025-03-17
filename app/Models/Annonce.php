<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
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

    public function touristes()
    {
        return $this->belongsToMany(Touriste::class);
    }

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }
    
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function formatDate($date, $format)
    {
        return Carbon::parse($date)->format($format);
    }
}
