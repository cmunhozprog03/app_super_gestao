<h1>Fornecedor</h1>


{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h2>Existem alguns fornecedores cadastrado</h2>
@elseif(count($fornecedores) > 10)
    <h2>Existem vários fornecedores cadastrado</h2>
@else
    <h2>Não existe fornecedores cadastrados</h2>
@endif --}}

@isset($fornecedores)
    @forelse ($fornecedores as $indice => $fornecedor )
        
        <h2>Interação atual: {{ $loop->iteration }}</h2>
        <h2>Fornercedor: {{ $fornecedor['nome'] }}</h2>
        <h2>Status: {{ $fornecedor['status'] }}</h2>
        <h2>CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não preenchido!' }}</h2>
        <h3>DDD: {{ $fornecedor['ddd'] ?? '' }}</h3>
        <h3>TELEFONE: {{ $fornecedor['telefone'] ?? '' }}</h3>
        @if ($loop->first)
            <h3>Primeira interação do Loop</h3>
        @endif
        @if ($loop->last)
            <h3>Última interação do Loop</h3>
            <h3>Total de registros {{ $loop->count }}</h3>
        @endif
        <hr>
    @empty
        <h1>Não existe fornecedores cadastrados</h1>
    @endforelse

@endisset




