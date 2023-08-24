<?php

namespace App\Http\Controllers;

use App\Models\Usuario_curso_asistencia;
use Illuminate\Http\Request;

class UsuarioCursoAsistenciaController extends Controller
{
    public function index()
    {
        return Usuario_curso_asistencia::all();
    }
    public function asistenciaAlumno(Request $datosAsistencia)
    {
        $registroAsistencia = new Usuario_curso_asistencia();
        $registroAsistencia->id_uce = $datosAsistencia->id_uce;
        $registroAsistencia->fecha_de_asistencia = $datosAsistencia->fecha_de_asistencia;
        $registroAsistencia->asistencia = $datosAsistencia->asistencia;
        $registroAsistencia->save();
        return "Se registro la asistencia correctamente";
    }
}
