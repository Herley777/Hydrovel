<?php
namespace App\Http\Controllers;

use App\Models\LeituraSensor;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class LeituraSensorController extends Controller
{
    public function index()
    {
        $leituras = LeituraSensor::latest()->take(20)->get();

        return view('sensores.index', compact('leituras'));
    }

    public function store(Request $request): JsonResponse
    {
        $dados = $request->validate([
            'pressao' => ['nullable', 'numeric', 'min:0'],
            'vazao' => ['nullable', 'numeric', 'min:0'],
            'ph' => ['nullable', 'numeric', 'between:0,14'],
            'turbidez' => ['nullable', 'numeric', 'min:0'],
            'temperatura' => ['nullable', 'numeric', 'between:-10,100'],
        ]);

        if (empty($dados)) {
            return response()->json([
                'mensagem' => 'Envie pelo menos uma leitura de sensor.'
            ], 422);
        }

        $leitura = LeituraSensor::create($dados);

        return response()->json([
            'mensagem' => 'Leitura recebida com sucesso.',
            'leitura' => $leitura
        ], 201);
    }
}
