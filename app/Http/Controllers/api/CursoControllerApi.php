<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoControllerApi extends Controller
{
    public function store(Request $req) {
        $novoCurso = Curso::create($req->all());
        return response()->json($novoCurso, 201);
    }

    public function index() {
        return response()->json(Curso::all(), 200);
    }

    public function show($id) {
        $curso = Curso::find($id);
        if ($curso != null) {
            return response()->json($curso, 200);
        } 
        return response()->json(['message' => 'Curso não encontrado'], 404);
    }

    public function update(Request $req, $id) {
        $curso = Curso::find($id);

        if ($curso) {
            $curso->update($req->all());
            return response()->json($curso, 200);
        } 

        return response()->json(['message' => 'Curso não encontrado'], 404);
    }

    public function destroy($id) {
        $cursoEncontrado = Curso::find($id);

        if ($cursoEncontrado) {
            if ($cursoEncontrado->delete()) {
                return response()->json(['message' => 'Removido com sucesso'], 200);
            } 
            return response()->json(['message' => 'Erro ao deletar'], 400);
        }

        return response()->json(['message' => 'Curso não encontrado'], 404);
    }
}