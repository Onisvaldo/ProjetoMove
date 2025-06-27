@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Usuário</h1>

    <form action="{{ route('admin.usuarios.store') }}" method="POST">
        @csrf

        <div>
            <label>Nome:</label>
            <input type="text" name="nome" required>
        </div>

        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label>Senha:</label>
            <input type="password" name="senha" required>
        </div>

        <div>
            <label>Confirmar Senha:</label>
            <input type="password" name="senha_confirmation" required>
        </div>

        <div>
            <label>Tipo de usuário:</label>
            <select name="role" required>
                <option value="clinica">Clínica</option>
                <option value="medico">Médico</option>
            </select>
        </div>

        <button type="submit">Cadastrar</button>
    </form>
</div>
@endsection
