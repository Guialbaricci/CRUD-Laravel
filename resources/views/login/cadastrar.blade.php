@extends('layout.site')

@section('titulo', 'Criar Conta')

@section('conteudo')
<div class="container" style="max-width: 450px;">
    <h3 class="center">Criar Conta</h3>

    @if($errors->any())
        <div style="background: #fee2e2; color: #dc2626; padding: 12px; border-radius: 6px; margin-bottom: 20px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('site.login.cadastrar') }}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
            <input type="text" name="name" placeholder="Nome" required>
        </div>

        <div class="input-field">
            <input type="email" name="email" placeholder="E-mail" required>
        </div>

        <div class="input-field">
            <input type="password" name="senha" placeholder="Senha" required>
        </div>

        <button class="btn blue" style="width: 100%; margin-bottom: 15px;">Cadastrar</button>
    </form>

    <div style="text-align: center; margin-top: 15px;">
        <a href="{{ route('login') }}" style="color: #2563eb; text-decoration: none; font-weight: bold;">
            Já tem uma conta? Entrar
        </a>
    </div>
</div>
@endsection