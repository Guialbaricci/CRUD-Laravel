<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CursoController;

Route::get('/', function () {
    return redirect('/admin/cursos');
});

Route::get('/admin/cursos', [CursoController::class, 'index'])
    ->name('admin.cursos');

Route::get('/admin/cursos/adicionar', [CursoController::class, 'adicionar'])
    ->name('admin.cursos.adicionar');

Route::post('/admin/cursos/salvar', [CursoController::class, 'salvar'])
    ->name('admin.cursos.salvar');

Route::get('/admin/cursos/editar/{id}', [CursoController::class, 'editar'])
    ->name('admin.cursos.editar');

Route::put('/admin/cursos/atualizar/{id}', [CursoController::class, 'atualizar'])
    ->name('admin.cursos.atualizar');

Route::get('/admin/cursos/excluir/{id}', [CursoController::class, 'excluir'])
    ->name('admin.cursos.excluir');