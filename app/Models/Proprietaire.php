<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proprietaire extends User
{
    protected $fillable = [
        'phone', 
        'city', 
        'Country',
    ];

    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }

    public function formatPhone()
    {
        $formatPhone = '';

        if (strlen($this->phone) == 10) {
            $formatPhone = +212 . substr($this->phone, 1, 1) . "xx-xxxxxx";
        } elseif (strlen($this->phone) == 13) {
            $formatPhone = +212 . substr($this->phone, 5,1) . "xx-xxxxxx";
        }
        
        return $formatPhone;
    }
}
