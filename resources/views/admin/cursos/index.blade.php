@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')

<div class="container">

    <h3 class="center">Lista de Cursos</h3>

    <div class="row">

        <table class="tabela">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Publicado</th>
                    <th>Valor</th>
                    <th>Imagem</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>

                @foreach($rows as $row)

                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->titulo }}</td>
                    <td>{{ $row->descricao }}</td>
                    <td>{{ $row->publicado ? 'Sim' : 'Não' }}</td>
                    <td>R$ {{ number_format($row->valor, 2, ',', '.') }}</td>

                    <td>
                        <img src="{{ asset($row->imagem) }}" alt="{{ $row->titulo }}">
                    </td>

                    <td class="acoes">

                        <a class="btn edit"
                           href="{{ route('admin.cursos.editar', $row->id) }}">
                           Alterar
                        </a>

                        <a class="btn delete"
                           href="{{ route('admin.cursos.excluir', $row->id) }}">
                           Excluir
                        </a>

                    </td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    <div class="row">
        <a class="btn add"
           href="{{ route('admin.cursos.adicionar') }}">
           Adicionar
        </a>
    </div>

</div>

@endsection