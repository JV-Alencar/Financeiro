<x-layout>
    <h2>Financeiro</h2>
    
    <h3>Contas a Pagar/Receber</h3>
    <ul>
        @foreach($contas as $conta)
            <li>{{ $conta['descricao'] }} - R$ {{ $conta['valor'] }} - {{ $conta['tipo'] }}</li>
        @endforeach
    </ul>

    <h3>Nova Conta</h3>
    <form method="POST" action="/financeiro">
        @csrf
        <label>Descrição: <input type="text" name="descricao"></label><br>
        <label>Valor: <input type="number" step="0.01" name="valor"></label><br>
        <label>Tipo:
            <select name="tipo">
                <option value="A Pagar">A Pagar</option>
                <option value="A Receber">A Receber</option>
            </select>
        </label><br>
        <button type="submit">Cadastrar</button>

        <li><a href="{{ url('/') }}">Voltar</a></li>
    </form>
</x-layout>
