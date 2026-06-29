<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Afficher l'erreur à l'écran uniquement si ?_debug_key=TA_CLE (même valeur que CACHE_CLEAR_KEY dans .env)
$showError = false;
if (isset($_GET['_debug_key']) && file_exists(__DIR__ . '/../.env')) {
    $env = parse_ini_file(__DIR__ . '/../.env', false, INI_SCANNER_RAW);
    $allowedKey = isset($env['CACHE_CLEAR_KEY']) ? trim(trim($env['CACHE_CLEAR_KEY']), '"\'') : null;
    if ($allowedKey !== null && trim($_GET['_debug_key'] ?? '') === $allowedKey) {
        $showError = true;
    }
}

try {
    // Determine if the application is in maintenance mode...
    if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
        require $maintenance;
    }

    // Register the Composer autoloader...
    require __DIR__.'/../vendor/autoload.php';

    // Bootstrap Laravel and handle the request...
    /** @var Application $app */
    $app = require_once __DIR__.'/../bootstrap/app.php';

    $app->handleRequest(Request::capture());
} catch (Throwable $e) {
    if ($showError) {
        header('Content-Type: text/html; charset=utf-8');
        echo '<!DOCTYPE html><html><head><meta charset="utf-8"><title>Erreur</title>';
        echo '<style>body{font-family:monospace;padding:1rem;background:#1e1e1e;color:#d4d4d4;} .err{color:#f14c4c;} pre{white-space:pre-wrap;}</style></head><body>';
        echo '<h1 class="err">' . htmlspecialchars($e->getMessage()) . '</h1>';
        echo '<p><strong>Fichier:</strong> ' . htmlspecialchars($e->getFile()) . ' <strong>Ligne:</strong> ' . $e->getLine() . '</p>';
        echo '<pre>' . htmlspecialchars($e->getTraceAsString()) . '</pre>';
        echo '<p><em>Supprime le paramètre ?_debug_key=... de l’URL une fois l’erreur corrigée.</em></p></body></html>';
    } else {
        throw $e;
    }
}
