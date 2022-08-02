<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerenciamentoOrigens extends Controller
{
    public function index()
    {
        return view('gerenciamento.origens');
    }
}

