@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Edição de Senha</h1>
            <span>
                <a href="{{ route('user.index') }}" class="btn-primary">Listar</a>
                <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn-info">Visualizar</a>
            </span>
        </div>

        <x-alert />

        <form action="{{ route('user.update-password', ['user' => $user->id]) }}" method="POST" class="form-container">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="password" class="form-label">Senha: </label>
                <input type="password" name="password" id="password" class="form-input" placeholder="Mínimo 6 caracteres"
                    value="{{ old('password') }}">
            </div>

            <button type="submit" class="btn-success">Salvar</button>
        </form>
    </div>
@endsection
