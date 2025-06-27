<?php

namespace App\Http\Controllers\Clinica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exame;
use Illuminate\Support\Facades\Storage;

class ExameController extends Controller
{
    public function create()
    {
        return view('clinica.exames.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'paciente' => 'required|string|max:255',
            'arquivo' => 'required|file|mimes:pdf|max:5120', // max 5MB
        ]);

        $path = $request->file('arquivo')->store('exames');

        $exame = new Exame();
        $exame->paciente = $request->paciente;
        $exame->arquivo = $path;
        $exame->save();

        return redirect()->route('clinica.exames.create')->with('success', 'Exame enviado com sucesso!');
    }
}
