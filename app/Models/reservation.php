<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reservation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'contact',
        'dateRv',
        'heure',
        'message',
        'id_docteur',
        'statut',
    ];

    public function docteur()
    {
        return $this->belongsTo(Docteur::class);
    }
}
