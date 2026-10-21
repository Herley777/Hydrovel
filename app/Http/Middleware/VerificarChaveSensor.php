<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificarChaveSensor
{
    public function handle(Request $request, Closure $next): Response
    {
        $chaveConfigurada = (string) config('services.sensor.key');
        $chaveRecebida = (string) $request->header('X-API-KEY');

        if (
            $chaveConfigurada === '' ||
            $chaveRecebida === '' ||
            ! hash_equals($chaveConfigurada, $chaveRecebida)
        ) {
            return response()->json([
                'mensagem' => 'Acesso nÃ£o autorizado.'
            ], 401);
        }

        return $next($request);
    }
}
