@extends('app.layouts.basico')

@section('titulo', 'Produto')


@section('conteudo')

    <div class="titulo-pagina2">
        Editar Produto produto
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('produto.index') }}">voltar</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto">

            <form action="{{ route('produto.update', $produto) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="text" name="nome" value="{{$produto->nome ?? old('nome')}}" placeholder="Nome" class="borda-preta">
                @error('nome')
                    <span>{{ $message }}</span>
                @enderror
                <input type="text" name="descricao" value="{{$produto->descricao ?? old('descricao') }}" placeholder="Descrição" class="borda-preta">
                @error('descricao')
                    <span>{{ $message }}</span>
                @enderror
                <input type="number" name="peso" value="{{ $produto->peso ?? old('peso') }}" placeholder="Peso" class="borda-preta">
                @error('peso')
                    <span>{{ $message }}</span>
                @enderror
                <select name="unidade_id" id="">
                    <option value="">-- Selecione a Unidade de Medida</option>
                    @foreach ($unidades as $unidade)
                        <option value="{{ $unidade->id }}" {{ $produto->id ?? old('unidade_id') == $unidade->id ? 'selected' : ''}}>{{ $unidade->descricao }}</option>
                    @endforeach

                </select>
                @error('unidade_id')
                    <span>{{ $message }}</span>
                @enderror
                <button type="submit" class="borda-preta">Atualizar</button>

            </form>
        </div>
    </div>

@endsection
