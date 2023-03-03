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
        <label>Sobrenome: </label><input type="text" name="sobrenome" value={{old('email')}}>
        @error('sobrenome')
            {{ $message }}
        @enderror
        <br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
