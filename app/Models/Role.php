<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    protected $fillable = [
        'name',
        'guard_name',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
