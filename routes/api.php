<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\UsuarioCursoAsistenciaController;
use App\Http\Controllers\UsuarioCursoEstudianteController;
use App\Http\Controllers\UsuarioCursoMaestroController;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//
Route::get("/usuarios", [UsuarioController::class, "index"]);
Route::get("/usuarios/maestros", [UsuarioController::class, "showMaestros"]);
Route::get("/usuarios/alumnos", [UsuarioController::class, "showAlumnos"]);
Route::post("/usuarios/create", [UsuarioController::class, "create"]);
Route::put("/usuarios/update/{id}", [UsuarioController::class, "update"]);
Route::put("/usuarios/delete/{id}", [UsuarioController::class, "destroy"]);
//
Route::get("/cursos", [CursoController::class, "index"]);
Route::post("/cursos/create", [CursoController::class, "create"]);
Route::put("/cursos/update/{id}", [CursoController::class, "update"]);
Route::put("/cursos/delete/{id}", [CursoController::class, "destroy"]);
//
Route::get("/matriculados", [UsuarioCursoEstudianteController::class, "index"]);
Route::get("/clases", [UsuarioCursoMaestroController::class, "index"]);
//
Route::post("/inscribir/alumno", [UsuarioCursoEstudianteController::class, "create"]);
Route::post("/inscribir/maestro", [UsuarioCursoMaestroController::class, "create"]);
//
Route::get("/asistencias", [UsuarioCursoAsistenciaController::class, "index"]);

Route::post("/asistencias/registro/alumno", [UsuarioCursoAsistenciaController::class, "asistenciaAlumno"]);
