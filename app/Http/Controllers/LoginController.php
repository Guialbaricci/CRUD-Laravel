<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function entrar(Request $request)
    {
        $dados = $request->all();

        if (Auth::attempt(['email' => $dados['email'], 'password' => $dados['senha']])) {
            return redirect()->route('admin.cursos');
        }

        return redirect()->route('login')->with('error', 'E-mail ou senha incorretos.');
    }

    public function cadastrarView()
    {
        return view('login.cadastrar');
    }

    public function cadastrar(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|min:6',
        ], [
            'email.unique' => 'Este e-mail já está cadastrado em nosso sistema.'
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->senha),
        ]);

        Auth::login($user);

        return redirect()->route('admin.cursos');
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}