<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Curso extends Model
{
    use HasFactory;
    protected $table = "cursos";
    protected $primaryKey = "id";
    protected $fillable = ['materia', 'nivel', 'horas_academicas', 'profesor_id'];
    protected $guarded = ['id'];

    public function profesor(): BelongsTo {
        return $this->belongsTo(Profesor::class);
    }

    public function alumnos(): BelongsToMany {
        return $this->belongsToMany(Alumno::class);
    }

}
