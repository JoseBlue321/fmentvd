<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Evaluacion;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $fillable = [
        'carnet',
        'nombre',
        'paterno',
        'materno',
    ];
    public $timestamps = false;
    
    public function evaluaciones(): HasMany
    {
        return $this->hasMany(Evaluacion::class,'persona_id');
    }
}
