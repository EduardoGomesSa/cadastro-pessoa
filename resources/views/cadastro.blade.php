<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Pessoas</title>
</head>
<body>
    <form action={{route('pessoas.store')}} method="POST">
        @csrf
        <label>Nome: </label><input type="text" name="nome" value={{old('nome')}}>
        @error('nome')
            {{ $message }}
        @enderror
        <br>
        <label>Sobrenome: </label><input type="text" name="sobrenome" value={{old('sobrenome')}}>
        @error('sobrenome')
            {{ $message }}
        @enderror
        <br>
        <label>E-mail: </label><input type="email" name="email" value={{old('email')}}>
        @error('email')
            {{ $message }}
        @enderror
        <br>
        <label>Data de nascimento: </label><input type="date" name="data_nascimento" value={{old('data_nascimento')}}>
        @error('data_nascimento')
            {{ $message }}
        @enderror
        <br>
        <button type="submit">Cadastrar</button>
    </form>

    <hr>

    <table border="1">
        <thead>
            <tr>
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
                        <button>Editar</button>  |
                        <button type="submit" {{route('pessoas.destroy')}}>Deletar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
