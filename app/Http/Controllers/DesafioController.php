<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesafioController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Rota de desafio']);
    }
}
