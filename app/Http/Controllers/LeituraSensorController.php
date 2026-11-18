<?php

namespace App\Http\Controllers;

use App\Models\LeituraSensor;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class LeituraSensorController extends Controller
{
    private function regrasValidacao(): array
    {
        return [
            'pressao' => ['nullable', 'numeric', 'min:0'],
            'vazao' => ['nullable', 'numeric', 'min:0'],
            'ph' => ['nullable', 'numeric', 'between:0,14'],
            'turbidez' => ['nullable', 'numeric', 'min:0'],
            'temperatura' => ['nullable', 'numeric', 'between:-10,100'],
        ];
    }

    private function possuiLeitura(array $dados): bool
    {
        foreach ($dados as $valor) {
            if ($valor !== null && $valor !== '') {
                return true;
            }
        }

        return false;
    }

    public function index()
    {
        $leituras = LeituraSensor::latest()->take(20)->get();

        return view('sensores.index', compact('leituras'));
    }

    public function create()
    {
        return view('sensores.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate($this->regrasValidacao());

        if (!$this->possuiLeitura($dados)) {
            return back()
                ->withInput()
                ->withErrors([
                    'leitura' => 'Preencha pelo menos um campo de leitura.'
                ]);
        }

        LeituraSensor::create($dados);

        return redirect()
            ->route('sensores.index')
            ->with('success', 'Leitura cadastrada com sucesso!');
    }

    public function edit(int $id)
    {
        $leitura = LeituraSensor::findOrFail($id);

        return view('sensores.edit', compact('leitura'));
    }

    public function update(Request $request, int $id)
    {
        $leitura = LeituraSensor::findOrFail($id);

        $dados = $request->validate($this->regrasValidacao());

        if (!$this->possuiLeitura($dados)) {
            return back()
                ->withInput()
                ->withErrors([
                    'leitura' => 'Preencha pelo menos um campo de leitura.'
                ]);
        }

        $leitura->update($dados);

        return redirect()
            ->route('sensores.index')
            ->with('success', 'Leitura atualizada com sucesso!');
    }

    public function destroy(int $id)
    {
        $leitura = LeituraSensor::findOrFail($id);

        $leitura->delete();

        return redirect()
            ->route('sensores.index')
            ->with('success', 'Leitura excluída com sucesso!');
    }

    public function storeApi(Request $request): JsonResponse
    {
        $dados = $request->validate($this->regrasValidacao());

        if (!$this->possuiLeitura($dados)) {
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