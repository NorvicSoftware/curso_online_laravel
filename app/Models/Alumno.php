<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alumno extends Model
{
    use HasFactory;
    protected $table = "alumnos";
    protected $primaryKey = "id";
    protected $fillable = ['nombre_apellido', 'edad', 'telefono', 'direccion'];
    protected $guarded = ['id'];

    public function cursos(): BelongsToMany {
        return $this->belongsToMany(Curso::class);
    }

}
