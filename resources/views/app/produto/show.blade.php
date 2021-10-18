@extends('app.layouts.basico')

@section('titulo', 'Produto')


@section('conteudo')

    <div class="titulo-pagina2">
        Mostar produto
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('produto.index') }}">voltar</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina">
        <div style="width: 70%; margin-left: auto; margin-right: auto">

            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descriçâo</th>
                        <th>Peso</th>
                        <th>Unidade de Medida</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->peso }}</td>
                            <td>{{ $produto->unidade_id }}</td>
                        </tr>
                    </tbody>
            </table>

        </div>
    </div>

@endsection

