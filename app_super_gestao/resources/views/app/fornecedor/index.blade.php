<h3>Fornecedor</h3>

@isset($fornecedores)
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br />
        Status: {{ $fornecedores[$i]['status'] }}
        <br />
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não preenchido' }}
        <br />
        Telefone:
                {{ $fornecedores[$i]['ddd'] ?? 'não preenchido' }}
                {{ $fornecedores[$i]['telefone'] ?? 'não preenchido' }}`
        <hr />
    @endfor
@endisset