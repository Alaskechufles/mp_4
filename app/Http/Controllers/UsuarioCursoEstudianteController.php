<?php

namespace App\Http\Controllers;

use App\Models\Usuario_curso_estudiante;
use Illuminate\Http\Request;

class UsuarioCursoEstudianteController extends Controller
{
    public function index()
    {
        return Usuario_curso_estudiante::all();
    }
    public function create(Request $formDeInscrip)
    {
        $nuevaInscripcion = new Usuario_curso_estudiante();
        $nuevaInscripcion->id_usuario = $formDeInscrip->id_usuario;
        $nuevaInscripcion->id_curso = $formDeInscrip->id_curso;
        $nuevaInscripcion->save();
        return "El alumno fue inscrito con exito";
    }
}
