<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de Laravel</title>
</head>
<body>

    <h1>Cadastrar Usuário</h1>

    @if (session('success'))
        <p style="color: green">
            {{ session('success') }}
        </p>
    @endif

    @if (session('error'))
        <p style="color: red">
            {{ session('error') }}
        </p>
    @endif

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <label for="name">Nome: </label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" 
        placeholder="Digite seu nome completo" required><br><br>

        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" 
        placeholder="Digite seu e-mail" required><br><br>

        <label for="password">Senha: </label>
        <input type="password" name="password" id="password" value="{{ old('password') }}" 
        placeholder="Mínimo 6 caracteres" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
