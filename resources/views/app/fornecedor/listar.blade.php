@extends('app.layouts.basico')

@section('titulo', 'Fornecedores')


@section('conteudo')

    <div class="titulo-pagina2">
        Fornecedor - Listar
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina">
        <div style="width: 90%; margin-left: auto; margin-right: auto">
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>Site</td>
                        <td>UF</td>
                        <td>E-mail</td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fornecedores as $fornecedor)
                       <tr>
                           <td>{{ $fornecedor->nome }}</td>
                           <td>{{ $fornecedor->site }}</td>
                           <td>{{ $fornecedor->uf }}</td>
                           <td>{{ $fornecedor->email }}</td>
                           <td>
                                <a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a>
                           </td>
                           <td>
                                <a href="">Excluir</a>
                           </td>
                       </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $fornecedores->appends($request)->links() }}
        </div>
    </div>

@endsection
