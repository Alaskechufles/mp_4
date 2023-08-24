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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("correo");
            $table->integer("rango");
            $table->boolean("usuario_activo");
            $table->timestamps();
        });
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->boolean("curso_activo");
            $table->timestamps();
        });
        Schema::create('usuario_curso_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_usuario");
            $table->unsignedBigInteger("id_curso");
            $table->timestamps();
            $table->foreign("id_usuario")->references("id")->on("usuarios");
            $table->foreign("id_curso")->references("id")->on("cursos");
        });
        Schema::create('usuario_curso_maestros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_usuario");
            $table->unsignedBigInteger("id_curso");
            $table->timestamps();
            $table->foreign("id_usuario")->references("id")->on("usuarios");
            $table->foreign("id_curso")->references("id")->on("cursos");
        });
        Schema::create('usuario_curso_asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_uce");
            $table->date("fecha_de_asistencia");
            $table->string("asistencia");
            $table->timestamps();
            $table->foreign("id_uce")->references("id")->on("usuario_curso_estudiantes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
