<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
    Route::get('/teste-web', function () {
        return response()->json(['mensagem' => 'Carregou web.php']);
    });
    
});
