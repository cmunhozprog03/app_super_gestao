@extends('app.layouts.basico')

@section('titulo', 'Produto')


@section('conteudo')

    <div class="titulo-pagina2">
        Adicionar produto
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('produto.index') }}">voltar</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto">
            @component('app.produto._components.form', ['unidades' => $unidades])

            @endcomponent
        </div>
    </div>

@endsection
