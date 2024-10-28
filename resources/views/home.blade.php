<!-- resources/views/home.blade.php -->
<x-layout>
    <h2>Bem-vindo à página inicial do financeiro</h2>
    <ul>
        <li><a href="{{ url('/financeiro') }}">Financeiro</a></li>
        <li><a href="{{ url('/usuarios') }}">Usuários</a></li>
    </ul>
</x-layout>
