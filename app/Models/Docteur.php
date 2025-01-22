<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Docteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'telephone',
        'email',
        'specialistion',
        'biographie',
        'password',
    ];

    public function reservation()
    {
        return $this->hasMany(reservation::class);
    }
}
