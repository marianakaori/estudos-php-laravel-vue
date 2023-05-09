<h3>Fornecedor</h3>

@isset($fornecedores)
    @forelse ($fornecedores as $item => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br />
        Status: {{ $fornecedor['status'] }}
        <br />
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não preenchido' }}
        <br />
        Telefone:
                {{ $fornecedor['ddd'] ?? 'não preenchido' }}
                {{ $fornecedor['telefone'] ?? 'não preenchido' }}`
        <hr />
    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset