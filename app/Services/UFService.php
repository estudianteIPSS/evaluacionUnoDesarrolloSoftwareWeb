<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UFService
{
    public static function obtenerUF()
    {
        try {
            $response = Http::get('https://mindicador.cl/api/uf');
            if ($response->successful()) {
                return $response->json()['serie'][0]['valor'];
            }
        } catch (\Exception $e) {
            return null;
        }
        return null;
    }
}
