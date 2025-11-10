@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Cadastro de Usuário</h1>
            <a href="{{ route('user.index') }}" class="btn-primary">Voltar</a>
        </div>

        <x-alert />

        <form action="{{ route('user.store') }}" method="POST" class="form-container">
            @csrf

            <div class="mb-4">
                <label for="name" class="form-label">Nome: </label>
                <input type="text" name="name" id="name" class="form-input"
                    placeholder="Digite seu nome completo" value="{{ old('name') }}">
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">E-mail: </label>
                <input type="email" name="email" id="email" class="form-input" placeholder="Digite seu e-mail"
                    value="{{ old('email') }}">
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Senha: </label>
                <input type="password" name="password" id="password" class="form-input" placeholder="Mínimo 6 caracteres"
                    value="{{ old('password') }}">
            </div>

            <button type="submit" class="btn-success">Cadastrar</button>
        </form>
    </div>
@endsection
