<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('materia', 75);
            $table->string('nivel', 35);
            $table->string('horas_academicas', 35)->nullable();
            $table->unsignedBigInteger('profesor_id');
            $table->foreign('profesor_id')->references('id')->on('profesores')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('alumno_curso', function(Blueprint $table){
            $table->increments('id');
            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->unsignedBigInteger('alumno_id');
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
