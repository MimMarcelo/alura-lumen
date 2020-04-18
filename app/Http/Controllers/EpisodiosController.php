<?php

namespace App\Http\Controllers;

use App\Episodio;

class EpisodiosController extends Controller
{
    public function __construct()
    {
        parent::__construct(Episodio::class);
    }
        
    public function episodiosPorSerie(int $serieId)
    {
        $episodios = Episodio::query()->where("serie_id", $serieId)->get();
        return response()->json($episodios);
    }
}
