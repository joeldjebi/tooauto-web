<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CacheController extends Controller
{
    public function clear(Request $request)
    {
        $key = config('app.cache_clear_key');

        if (!$key || $request->query('key') !== $key) {
            abort(403, 'Clé invalide pour le vidage de cache.');
        }

        Artisan::call('optimize:clear');

        return response()->json([
            'status' => 'ok',
            'message' => 'Tous les caches ont été vidés.',
            'output' => Artisan::output(),
        ]);
    }
}
