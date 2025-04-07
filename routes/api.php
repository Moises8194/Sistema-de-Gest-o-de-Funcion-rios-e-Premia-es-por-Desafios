
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\DesafioController;
use App\Http\Controllers\RelatorioController;


Route::get('/ping', function () {
    return response()->json(['pong' => true]);
});

// ✅ ROTA DE TESTE AQUI
Route::get('/teste', function () {
    return response()->json(['mensagem' => 'rota funcionando']);
});

// Rotas públicas
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rota para obter usuário autenticado
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rotas protegidas (com autenticação)
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('funcionarios', FuncionarioController::class);
    Route::post('/desafios', [DesafioController::class, 'store']);
    Route::get('/relatorios', [RelatorioController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout']); 
});
