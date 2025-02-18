<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategLivre extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];

    public function livres()
    {
        return $this->hasMany(Livre::class);
    }
}
