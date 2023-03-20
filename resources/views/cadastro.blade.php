<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Pessoas</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-300 flex items-center flex-col">
    <main class="bg-gray-500 w-200">
        <h1 class="bg-gray-600 font-bold">Cadastro de Pessoa</h1>
        <form action={{route('pessoas.store')}} method="POST" class="bg-yellow-400">
            @csrf
            <label>Nome: </label><input type="text" name="nome" class="border border-gray-600"
             value={{old('nome')}}>
            @error('nome')
                {{ $message }}
            @enderror
            <br>
            <label>Sobrenome: </label><input type="text" name="sobrenome" class="border border-gray-600"
             value={{old('sobrenome')}}>
            @error('sobrenome')
                {{ $message }}
            @enderror
            <br>
            <label>E-mail: </label><input type="email" name="email" class="border border-gray-600"
             value={{old('email')}}>
            @error('email')
                {{ $message }}
            @enderror
            <br>
            <label>Data de nascimento: </label><input type="date" name="data_nascimento" class="border border-gray-600"
             value={{old('data_nascimento')}}>
            @error('data_nascimento')
                {{ $message }}
            @enderror
            <br>
            <button type="submit" class="border border-gray-600">Cadastrar</button>
        </form>

        <hr>

        <table>
            <thead>
                <tr class="bg-gray-600 font-bold">
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pessoas as $pessoa)
                    <tr>
                        <td>{{ $pessoa->nome}}</td>
                        <td>{{ $pessoa->sobrenome}}</td>
                        <td>{{ $pessoa->email}}</td>
                        <td>
                            <a href={{ route('atualizacao', [$pessoa->id])}}
                                onclick="event.preventDefault(); document.getElementById('update-form-{{$pessoa->id}}').submit();">Editar</a> |
                            <form id="update-form-{{$pessoa->id}}"
                                action="{{route('atualizacao', $pessoa->id)}}"
                                method="post" style="display: none;">
                                @csrf
                                @method('GET')
                            </form>

                            <a href={{ route('pessoas.destroy', [$pessoa->id]) }}
                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $pessoa->id }}').submit();">Excluir</a>
                            <form id="delete-form-{{ $pessoa->id }}"
                                action="{{ route('pessoas.destroy', $pessoa->id) }}"
                                method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>
