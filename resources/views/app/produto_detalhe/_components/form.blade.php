@if (isset($produto_detalhe->id))
    <form action="{{ route('produto.update', $produto_detalhe) }}" method="POST">
        @csrf
        @method('PUT')
    @else
        <form action="{{ route('produto-detalhe.store') }}" method="POST">
            @csrf
@endif

<input type="text" name="produto_id" value="{{ $produto_detalhe->id ?? old('produto_id') }}" placeholder="Produto_id" class="borda-preta">
@error('produto_id')
    <span>{{ $message }}</span>
@enderror
<input type="text" name="comprimento" value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}" placeholder="Comprimento" class="borda-preta">
@error('comprimento')
    <span>{{ $message }}</span>
@enderror
<input type="text" name="largura" value="{{ $produto_detalhe->largura ?? old('largura') }}" placeholder="Largura" class="borda-preta">
@error('largura')
    <span>{{ $message }}</span>
@enderror
<input type="text" name="altura" value="{{ $produto_detalhe->altura ?? old('altura') }}" placeholder="Altura" class="borda-preta">
@error('altura')
    <span>{{ $message }}</span>
@enderror
<select name="unidade_id" id="">
    <option value="">-- Selecione a Unidade de Medida</option>
    @foreach ($unidades as $unidade)
        <option value="{{ $unidade->id }}"
            {{ ($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>
            {{ $unidade->descricao }}</option>
    @endforeach

</select>
@error('unidade_id')
    <span>{{ $message }}</span>
@enderror
<button type="submit" class="borda-preta">Cadastrar</button>

</form>
