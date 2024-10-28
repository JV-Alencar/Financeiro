<x-layout>
    <h2>Usuários</h2>

    <h3>Lista de Usuários</h3>
    <ul>
        @foreach($usuarios as $usuario)
            <li>{{ $usuario['nome'] }} - {{ $usuario['cargo'] }} - {{ $usuario['escolaridade'] }}</li>
        @endforeach
    </ul>

    <h3>Novo Usuário</h3>
    <form method="POST" action="/usuarios">
        @csrf
        <label>Nome: <input type="text" name="nome"></label><br>
        <label>Cargo: <input type="text" name="cargo"></label><br>
        <label>Escolaridade:
            <select name="escolaridade">
                <option value="Fundamental">Fundamental</option>
                <option value="Médio">Médio</option>
                <option value="Superior">Superior</option>
            </select>
        </label><br>
        <button type="submit">Cadastrar</button>

        <li><a href="{{ url('/') }}">Voltar</a></li>
    </form>
</x-layout>
