<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Listar funcionários']);
    }

    public function store(Request $request)
    {
        return response()->json(['message' => 'Criar funcionário']);
    }
}
