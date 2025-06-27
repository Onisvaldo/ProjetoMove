@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Usuário</h1>
    @include('admin.usuarios.form', [
        'route' => route('admin.usuarios.update', $usuario->id),
        'method' => 'PUT',
        'usuario' => $usuario
    ])
</div>
@endsection
