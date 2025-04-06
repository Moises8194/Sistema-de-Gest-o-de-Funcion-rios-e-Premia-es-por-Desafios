<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function gerar()
    {
        return response()->json(['message' => 'Gerando relatório']);
    }
}
