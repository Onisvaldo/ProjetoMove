@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 flex gap-8">

    <div class="w-1/2">
        <h2 class="text-xl font-bold mb-2">Visualizar Exame (PDF)</h2>
        <embed src="{{ asset('storage/' . $exame->arquivo) }}" type="application/pdf" width="100%" height="600px" />
    </div>

    <div class="w-1/2">
        <h2 class="text-xl font-bold mb-4">Emitir Laudo para {{ $exame->paciente }}</h2>

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

        <form action="{{ route('medico.laudos.store', $exame->id) }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="conteudo" class="block font-semibold mb-1">Conteúdo do Laudo</label>
                <textarea id="conteudo" name="conteudo" rows="10" class="w-full border rounded px-3 py-2" required>{{ old('conteudo') }}</textarea>
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Salvar Laudo
            </button>
        </form>
    </div>
</div>
@endsection
