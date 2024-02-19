<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Parcial extends Model
{
    use HasFactory;
    protected $table = 'parciales';
    protected $fillable = [
        'asignatura_id',
        'parcial',
        'patron',
        'fecha',
    ];

    public function asignaturas(): BelongsTo
    {
        return $this->belongsTo(Asignatura::class,'asignatura_id');
    }
    public function evaluaciones(): HasMany
    {
        return $this->hasMany(Evaluacion::class,'parcial_id');
    }
}
