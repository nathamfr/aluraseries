<x-layout title="Criar série">
    <form action="/series" method="post">
        @csrf
        <input type="text" name="nome">
        <input type="text" name="descricao">
        <input type="number" name="avaliacao">
        <button type="submit">Enviar</button>
    </form>
</x-layout>