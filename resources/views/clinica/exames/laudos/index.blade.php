@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Laudos Emitidos</h1>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">{{ session('success') }}</div>
    @endif

    @if($laudos->isEmpty())
        <p>Não há laudos disponíveis.</p>
    @else
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-3 py-2">Paciente</th>
                    <th class="border border-gray-300 px-3 py-2">Médico</th>
                    <th class="border border-gray-300 px-3 py-2">Data</th>
                    <th class="border border-gray-300 px-3 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($laudos as $laudo)
                <tr>
                    <td class="border border-gray-300 px-3 py-2">{{ $laudo->exame->paciente ?? 'N/A' }}</td>
                    <td class="border border-gray-300 px-3 py-2">{{ $laudo->medico->name ?? 'N/A' }}</td>
                    <td class="border border-gray-300 px-3 py-2">{{ $laudo->created_at->format('d/m/Y H:i') }}</td>
                    <td class="border border-gray-300 px-3 py-2">
                        <a href="{{ route('clinica.laudos.show', $laudo->id) }}" class="text-blue-600 hover:underline">Visualizar</a>
                        {{-- se quiser botão para download --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
