@extends('app.layouts.basico')

@section('titulo', 'Produtos')


@section('conteudo')

    <div class="titulo-pagina2">
        Listagem de produtos
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('produto.create') }}">Novo</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina">
        <div style="width: 90%; margin-left: auto; margin-right: auto">
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>Descrição</td>
                        <td>Peso</td>
                        <td>Unidade Id</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produto)
                       <tr>
                           <td>{{ $produto->nome }}</td>
                           <td>{{ $produto->descricao }}</td>
                           <td>{{ $produto->peso }}</td>
                           <td>{{ $produto->unidade_id }}</td>
                           <td>
                                <a href="{{ route('produto.show', $produto) }}">Ver</a>
                           </td>
                           <td>
                                <a href="">Editar</a>
                           </td>
                           <td>
                                <a href="">Excluir</a>
                           </td>
                       </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $produtos->appends($request)->links() }}
            <br>
            Exibindo {{ $produtos->count() }} produtos de {{ $produtos->total() }} (de{{ $produtos->firstItem() }} a {{ $produtos->lastItem() }}).
        </div>
    </div>

@endsection
