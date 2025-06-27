<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laudo;
use App\Models\Exame;
use Illuminate\Support\Facades\Auth;

class LaudoController extends Controller
{
    public function store(Request $request, $exameId)
    {
        $request->validate([
            'conteudo' => 'required|string',
        ]);

        $exame = Exame::findOrFail($exameId);

        $laudo = new Laudo();
        $laudo->exame_id = $exame->id;
        $laudo->medico_id = Auth::id(); // pressupõe que o médico está autenticado
        $laudo->conteudo = $request->conteudo;
        $laudo->save();

        // Aqui você pode implementar lógica para notificar a clínica, etc.

        return redirect()->route('medico.exames.show', $exame->id)->with('success', 'Laudo salvo com sucesso!');
    }
}
