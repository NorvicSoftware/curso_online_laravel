<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profesor extends Model
{
    use HasFactory;
    protected $table = "profesores";
    protected $primaryKey = "id";
    protected $fillable = ['nombre_apellido', 'profesion', 'grado_academico', 'telefono'];
    protected $guarded = ['id'];

    public function cursos(): HasMany {
        return $this->hasMany(Curso::class);
    }
}
