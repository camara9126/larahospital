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
        'titre',
        'email',
        'specialisation',
        'biographie',
        'password',
    ];

}
