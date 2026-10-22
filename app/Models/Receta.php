<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Receta extends Model
{
    protected $fillable = [
        'titulo',
        'porciones',
        'instrucciones',
    ];

    public function detallesIngredientes(): HasMany
    {
        return $this->hasMany(DetalleIngrediente::class);
    }
}
