<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::orderBy('nome', 'asc')->get();
        $mensagem = session('mensagem.sucesso');

        return view('pages.series.index')
            ->with([
                'series' => $series,
                'mensagem' => $mensagem,
            ]);
    }

    public function create()
    {
        return view('pages.series.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'avaliacao' => 'required',
        ]);

        Serie::create($request->all());

        session()->flash('mensagem.sucesso', 'Série adicionada com sucesso!');

        return to_route('series.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Request $request, Serie $id)
    {
        Serie::destroy($id);

        session()->flash('mensagem.sucesso', 'Série removida com sucesso!');

        return to_route('series.index');
    }
}
