<?php

namespace App\Http\Controllers;

use App\Episodio;

class EpisodiosController extends Controller
{
    public function __construct()
    {
        parent::__construct(Episodio::class);
    }
}
