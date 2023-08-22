<?php

namespace App\Http\Controllers;

use App\Models\Usuario_curso_maestro;
use Illuminate\Http\Request;

class UsuarioCursoMaestroController extends Controller
{
    public function index()
    {
        return Usuario_curso_maestro::all();
    }
    public function create(Request $formDeInscrip)
    {
        $nuevaInscripcion = new Usuario_curso_maestro();
        $nuevaInscripcion->id_usuario = $formDeInscrip->id_usuario;
        $nuevaInscripcion->id_curso = $formDeInscrip->id_curso;
        $nuevaInscripcion->save();
        return "El maestro fue inscrito con exito";
    }
}
