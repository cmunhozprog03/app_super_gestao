@extends('app.layouts.basico')

@section('titulo', 'Fornecedores')


@section('conteudo')

    <div class="titulo-pagina2">
        Fornecedor - Adicionar
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}  ">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto">
            {{ $msg ?? ''}}
            <form action="{{ route('app.fornecedor.adicionar') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $fornecedor->id ?? '' }}">
                <input type="text" name="nome" value="{{ $fornecedor->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
                @error('nome')
                    <span>{{ $message }}</span>
                @enderror
                <input type="text" name="site" value="{{ $fornecedor->site ?? old('site') }}" placeholder="Site" class="borda-preta">
                @error('site')
                    <span>{{ $message }}</span>
                @enderror
                <input type="text" name="uf" value="{{ $fornecedor->uf ?? old('uf') }}" placeholder="UF" class="borda-preta">
                @error('uf')
                    <span>{{ $message }}</span>
                @enderror
                <input type="text" name="email" value="{{ $fornecedor->email ?? old('email') }}" placeholder="E-mail" class="borda-preta">
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
                <button type="submit" class="borda-preta">Cadastrar</button>

            </form>
        </div>
    </div>

@endsection
