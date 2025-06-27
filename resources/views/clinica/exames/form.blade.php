@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Enviar novo exame (PDF)</h1>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="bg-red-200 text-red-800 p-3 mb-4 rounded">
            <ul>
                @foreach($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clinica.exames.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label for="paciente" class="block font-semibold mb-1">Nome do Paciente</label>
            <input type="text" id="paciente" name="paciente" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label for="arquivo" class="block font-semibold mb-1">Arquivo PDF do exame</label>
            <input type="file" id="arquivo" name="arquivo" accept="application/pdf" class="w-full" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Enviar exame
        </button>
    </form>
</div>
@endsection
