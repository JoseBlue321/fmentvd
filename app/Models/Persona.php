<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $fillable = [
        'asignatura_id',
        'carnet',
        'nombre',
        'paterno',
        'materno',
        'nota',
        'imagen',
    ];
    public $timestamps = false;
    
    public function post(): BelongsTo
    {
        return $this->belongsTo(Asignatura::class,'asignatura_id');
    }
}
