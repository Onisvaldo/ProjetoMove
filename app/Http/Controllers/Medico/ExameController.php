<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Exame;

class ExameController extends Controller
{
    public function index()
    {
        $exames = Exame::orderBy('created_at', 'desc')->get();
        return view('medico.exames.index', compact('exames'));
    }

    public function show($id)
    {
        $exame = Exame::findOrFail($id);
        return view('medico.exames.show', compact('exame'));
    }
}

