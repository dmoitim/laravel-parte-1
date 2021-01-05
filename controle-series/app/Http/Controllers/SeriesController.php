<?php

namespace App\Http\Controllers;

use App\Serie;
use Symfony\Component\HttpFoundation\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;
        $serie = Serie::create([
            'nome' => $nome
        ]);

        $request->session()->flash(
            'mensagem',
            "Série {$serie->nome} criada com ID {$serie->id}."
        );

        return redirect('/series');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;

        Serie::destroy($id);

        $request->session()->flash(
            'mensagem',
            "Série ID {$id} excluída com sucesso."
        );

        return redirect('/series');
    }
}
