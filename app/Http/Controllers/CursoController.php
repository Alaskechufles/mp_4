<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return Curso::all();
    }
    public function create(Request $datosEnPost)
    {
        $nuevoCurso = new Curso();
        $nuevoCurso->nombre = $datosEnPost->nombre;
        $nuevoCurso->curso_activo = $datosEnPost->curso_activo;
        $nuevoCurso->save();
        return "Se creó el nuevo curso";
    }
    public function update(Request $datosEnPut, $id)
    {
        $cursoPorActualizar = Curso::find($id);
        $cursoPorActualizar->nombre = $datosEnPut->nombre;
        $cursoPorActualizar->save();
        return "El curso con id " . $id . " ,ha sido actualizado";
    }
    public function destroy(Request $cambioEstado, $id)
    {
        $estado = Curso::find($id);
        $estado->curso_activo = $cambioEstado->curso_activo;
        $estado->save();
        return "El estado del curso con id " . $id . " ,ha sido actualizado";
    }
}
