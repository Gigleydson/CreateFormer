@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Edição de Usuário</h1>
            <span>
                <a href="{{ route('user.index') }}" class="btn-primary">Listar</a>
                <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn-info">Visualizar</a>
            </span>
        </div>

        <x-alert />

        <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST" class="form-container">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="form-label">Nome: </label>
                <input type="text" name="name" id="name" class="form-input"
                    placeholder="Digite seu nome completo" value="{{ old('name', $user->name) }}">
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">E-mail: </label>
                <input type="email" name="email" id="email" class="form-input" placeholder="Digite seu e-mail"
                    value="{{ old('email', $user->email) }}">
            </div>

            <button type="submit" class="btn-success">Salvar</button>
        </form>
    </div>
@endsection
