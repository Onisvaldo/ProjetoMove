@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Usuários</h1>
    <a href="{{ route('admin.usuarios.create') }}">➕ Novo Usuário</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table border="1" cellpadding="5">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
        @foreach ($usuarios as $u)
        <tr>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ ucfirst($u->role) }}</td>
            <td>
                <a href="{{ route('admin.usuarios.edit', $u->id) }}">✏️ Editar</a>
                <form action="{{ route('admin.usuarios.destroy', $u->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Excluir usuário?')">🗑️ Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
