@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Usuário</h1>
    @include('admin.usuarios.form', ['route' => route('admin.usuarios.store'), 'method' => 'POST'])
</div>
@endsection
