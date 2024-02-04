<x-layout title="Series PO">
    <a href="{{ route('series.create') }}">Adicionar nova série</a>

    @isset($mensagem)
    <div>
        {{ $mensagem }}
    </div>
    @endisset

    @foreach ($series as $serie)
    <h3>{{ $serie->nome }}</h3>
    <p>Descrição:{{ $serie->descricao }}</p>
    <p>Avaliação:{{ $serie->avaliacao }}</p>
    <form action="{{ route('series.destroy', $serie->id) }}" method="post">
        @csrf
        <button type="submit">Excluir</button>
    </form>
    <hr>
    @endforeach
</x-layout>