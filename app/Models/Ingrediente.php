<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ingrediente extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function usosEnRecetas(): HasMany
    {
        return $this->hasMany(DetalleIngrediente::class);
    }
}
