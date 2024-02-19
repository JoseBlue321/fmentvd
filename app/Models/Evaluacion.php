<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;
    protected $table = 'evaluaciones';
    protected $fillable = [
        'parcial_id',
        'persona_id',
        'nota',
        'imagen',
    ];

    
    public function parciales(): BelongsTo
    {
        return $this->belongsTo(Parcial::class,'parcial_id');
    }
    public function personas(): BelongsTo
    {
        return $this->belongsTo(Persona::class,'persona_id');
    }
}
