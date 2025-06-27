@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Exames Recebidos</h1>

    @if($exames->isEmpty())
        <p>Não há exames para serem avaliados.</p>
    @else
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-3 py-2">Paciente</th>
                    <th class="border border-gray-300 px-3 py-2">Data de envio</th>
                    <th class="border border-gray-300 px-3 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($exames as $exame)
                <tr>
                    <td class="border border-gray-300 px-3 py-2">{{ $exame->paciente }}</td>
                    <td class="border border-gray-300 px-3 py-2">{{ $exame->created_at->format('d/m/Y H:i') }}</td>
                    <td class="border border-gray-300 px-3 py-2">
                        <a href="{{ route('medico.exames.show', $exame->id) }}" class="text-blue-600 hover:underline">Visualizar / Emitir Laudo</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
