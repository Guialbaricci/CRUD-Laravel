@extends('layout.site')

@section('titulo', 'Login')

@section('conteudo')
<div class="container" style="max-width: 450px;">
    <h3 class="center">Entrar no Sistema</h3>

    @if(session('error'))
        <div style="background: #fee2e2; color: #2563eb; padding: 12px; border-radius: 6px; margin-bottom: 20px; text-align: center; font-weight: bold;">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('site.login.entrar') }}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
            <input type="text" name="email" placeholder="E-mail" required>
        </div>

        <div class="input-field">
            <input type="password" name="senha" placeholder="Senha" required>
        </div>

        <button class="btn blue" style="width: 100%; margin-bottom: 15px;">Entrar</button>
    </form>

    <div style="text-align: center; margin-bottom: 15px;">
        <a href="{{ route('site.login.cadastrarView') }}" style="color: #2563eb; text-decoration: none; font-weight: bold;">
            Não tem uma conta? Cadastre-se aqui
        </a>
    </div>

    <div style="text-align: center; margin: 15px 0; color: #64748b; font-weight: bold;">
        OU
    </div>

    <a href="{{ route('auth.google') }}" class="btn btn-google" style="display: flex; align-items: center; justify-content: center; width: 100%; box-sizing: border-box; gap: 8px;">
        <svg style="width:18px; height:18px;" viewBox="0 0 24 24">
            <path fill="#ffffff" d="M21.35 11.1H12v3.8h5.4c-.2 1.2-.9 2.3-2 3.1v2.5h3.2c1.9-1.7 3-4.3 3-7.4 0-.5 0-1-.1-1.5z"/>
            <path fill="#ffffff" d="M12 21c2.7 0 5-.9 6.6-2.5l-3.2-2.5c-.9.6-2 1-3.4 1-2.6 0-4.8-1.7-5.6-4.1H3.1v2.6C4.7 18.7 8.1 21 12 21z"/>
            <path fill="#ffffff" d="M6.4 12.9c-.2-.6-.3-1.3-.3-1.9s.1-1.3.3-1.9V6.5H3.1C2.4 7.9 2 9.4 2 11s.4 3.1 1.1 4.5l3.3-2.6z"/>
            <path fill="#ffffff" d="M12 5c1.5 0 2.8.5 3.8 1.5l2.8-2.8C16.9 2.1 14.6 1.3 12 1.3 8.1 1.3 4.7 3.6 3.1 6.8l3.3 2.6C7.2 7 9.4 5 12 5z"/>
        </svg>
        <span>Entrar com o Google</span>
    </a>
</div>
@endsection