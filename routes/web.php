<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'index'])
    ->name('login');

Route::post('/login/entrar', [LoginController::class, 'entrar'])
    ->name('site.login.entrar');

Route::get('/login/cadastrar', [LoginController::class, 'cadastrarView'])
    ->name('site.login.cadastrarView');
Route::post('/login/cadastrar', [LoginController::class, 'cadastrar'])
    ->name('site.login.cadastrar');

Route::get('/login/sair', [LoginController::class, 'sair'])
    ->name('site.login.sair');

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])
    ->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);