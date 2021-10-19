@extends('app.layouts.basico')

@section('titulo', 'Detalhes do Produto')


@section('conteudo')

    <div class="titulo-pagina2">
        Adicionar Detalhes do Produto
    </div>

    <div class="menu">
        <ul>
            <li><a href="">voltar</a></li>

        </ul>
    </div>

    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto">
            @component('app.produto_detalhe._components.form', ['unidades' => $unidades])

            @endcomponent
        </div>
    </div>

@endsection

