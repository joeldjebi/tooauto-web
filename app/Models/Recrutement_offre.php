<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recrutement_offre extends Model
{
    protected $table = 'recrutement_offres';
    
    protected $fillable = [
        'offre_id',
        'nom',
        'prenoms',
        'email',
        'mobile',
        'lm',
        'cv',
    ];

    protected $casts = [
        'offre_id' => 'integer',
    ];

    // Relation avec l'offre d'emploi si nécessaire
    public function offre_emploi()
    {
        return $this->belongsTo(Offre_emploi::class, 'offre_id');
    }
}

