<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieux extends Model
{
    use HasFactory;

    public function departements   () {
        return $this->hasMany(Departement::class);
    }
}
