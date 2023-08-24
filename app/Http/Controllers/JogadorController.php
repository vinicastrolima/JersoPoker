<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogadorController extends Controller
{
    public function index()
    {
        $jogadores = Jogador::all();
        return response()->json($jogadores);
    }

    public function show($id)
    {
        $jogador = Jogador::findOrFail($id);
        return response()->json($jogador);
    }

    public function store(Request $request)
    {
        $jogador = Jogador::create($request->all());
        return response()->json($jogador, 201);
    }

    public function update(Request $request, $id)
    {
        $jogador = Jogador::findOrFail($id);
        $jogador->update($request->all());
        return response()->json($jogador, 200);
    }

    public function destroy($id)
    {
        $jogador = Jogador::findOrFail($id);
        $jogador->delete();
        return response()->json(null, 204);
    }
}