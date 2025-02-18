<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'auteur', 'annee_publication', 'resume', 'categ_livre_id'];

    public function categorie()
    {
        return $this->belongsTo(CategLivre::class, 'categ_livre_id');
    }
}
