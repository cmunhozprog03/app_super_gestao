{{ $slot }}
<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
        @error('nome')
            <small>{{ $message }}</small>
        @enderror
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
        @error('telefone')
            <small>{{ $message }}</small>
        @enderror
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
        @error('email')
            <small>{{ $message }}</small>
        @enderror
    <br>

    <select name="motivo_contatos_id" class="{{ $classe }}">
        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{ $motivo_contato->id }}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>{{ $motivo_contato->motivo_contato }}</option>
        @endforeach
    </select>
        @error('motivo_contato')
            <small>{{ $message }}</small>
        @enderror
    <br>
    <textarea name="mensagem" class="{{ $classe }}">{{ old('mensagem') != '' ? old('mensagem') : 'Preencha aqui a sua mensagem' }}

    </textarea>
        @error('mensagem')
            <small>{{ $message }}</small>
        @enderror
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>


