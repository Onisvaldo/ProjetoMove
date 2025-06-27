<form action="{{ $route }}" method="POST">
    @csrf
    @if ($method === 'PUT') @method('PUT') @endif

    <div>
        <label>Nome:</label>
        <input type="text" name="name" value="{{ old('name', $usuario->name ?? '') }}" required>
    </div>

    <div>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $usuario->email ?? '') }}" required>
    </div>

    <div>
        <label>Tipo de Usuário:</label>
        <select name="role" required>
            <option value="clinica" {{ old('role', $usuario->role ?? '') == 'clinica' ? 'selected' : '' }}>Clínica</option>
            <option value="medico" {{ old('role', $usuario->role ?? '') == 'medico' ? 'selected' : '' }}>Médico</option>
        </select>
    </div>

    <div>
        <label>Senha:</label>
        <input type="password" name="password" {{ isset($usuario) ? '' : 'required' }}>
    </div>

    <div>
        <label>Confirmar senha:</label>
        <input type="password" name="password_confirmation" {{ isset($usuario) ? '' : 'required' }}>
    </div>

    <button type="submit">Salvar</button>
</form>
