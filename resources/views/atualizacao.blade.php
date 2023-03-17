<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualização de Pessoas</title>
</head>
<body>
    <form action={{route('pessoas.update', [request()->id])}} method="POST">
        @csrf
        @method('PUT')
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
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
