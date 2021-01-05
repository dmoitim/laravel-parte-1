<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        /*
        // Chamando a URL http://localhost:8000/series?chave=valor&chave2=valor2

        // Retorna a URL
        // Resultado: http://localhost:8000/series
        echo $request->url() . '<br>';

        // Retorna o valor do parâmetro chave da URL
        // Resultado: valor
        echo $request->query(key: 'chave') . '<br>';

        // Retorna todos os parâmetros da URL
        // Resultado: Array ( [chave] => valor [chave2] => valor2 )
        print_r($request->query());
        exit();
        */

        $series = [
            'Mandalorian',
            'Cobra Kai',
            'Stranger Things'
        ];

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }
}
