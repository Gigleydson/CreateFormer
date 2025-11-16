@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Detalhes do Usuário</h1>
            <span>
                <a href="{{ route('user.index') }}" class="btn-primary">Listar</a>
                <a href="{{ route('user.generate-pdf', ['user' => $user->id]) }}" class="btn-warning">Gerar PDF</a>
                <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn-warning">Editar</a>
                <a href="{{ route('user.edit-password', ['user' => $user->id]) }}" class="btn-warning">Editar senha</a>
                <form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    @method('delete')

                    <button type="button" class="btn-danger"
                        onclick="confirmDelete({{ $user->id }})">Apagar</button>
                </form>
            </span>
        </div>

        <x-alert />

        <div class="show-container">
            <h2 class="show-title">Informações do Usuário</h2>
            <ul class="show-list">
                <li><span>Nome: </span>{{ $user->name }}</li>
                <li><span>E-mail: </span>{{ $user->email }}</li>
                <li><span>Criado em: </span>{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }}</li>
                <li><span>Editado em: </span>{{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s') }}</li>
            </ul>
        </div>
    </div>
@endsection
