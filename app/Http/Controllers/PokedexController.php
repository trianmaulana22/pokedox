<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokedexController extends Controller
{
    public function index()
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon?limit=18');
        $pokemons = $response->json();

        return view('pokedex.index', ['pokemons' => $pokemons['results']]);
    }

    public function show($id)
    {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/$id");
        $pokemon = $response->json();

        return view('pokedex.show', ['pokemon' => $pokemon]);
    }
}
