<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','apellidoP','email'];

    public function alumnos():BelongsTo{
        return $this->belongsTo(Carrera::class);
    }
}
