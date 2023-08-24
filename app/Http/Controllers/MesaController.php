<?php


namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\Jogador;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function iniciar(Request $request)
    {
        // Lógica para iniciar uma nova mesa
    }

    public function adicionarBuyin(Request $request)
    {
        // Lógica para adicionar uma entrada de buy-in
    }

    public function calcularPagamentos(Request $request, $mesa_id)
    {
        // Lógica para calcular pagamentos após a mesa encerrar
    }
}
