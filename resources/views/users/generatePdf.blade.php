<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .show-container {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .show-list {
            list-style-type: none;
            font-size: 14px;
        }

        span{
            font-weight: bold;
        }
    </style>

    <title>Laravel</title>
</head>

<body>
    <div class="content">
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
</body>

</html>
    

