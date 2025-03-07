<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reservation extends Model
{
    use Notifiable;
    protected $fillable = [
        'start_date',
        'end_date',
        'prix_totale',
        'touriste_id',
        'annonce_id',
        'reference',
    ];

    public function touriste()
    {
        return $this->belongsTo(Touriste::class);
    }

    public function annonce()
    {
        return $this->belongsTo(Annonce::class);
    }

    public function formatDate($date, $format)
    {
        return Carbon::parse($date)->format($format);
    }
}
