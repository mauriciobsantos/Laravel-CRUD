<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editando Tarefas</title>
</head>
<body>
    <form action="/tarefas/{{ $tarefas['id'] }}" method="post">
        @csrf
        @method('put')
    <input type="text" value="{{ $tarefas ['texto'] }}"name="texto" id="texto">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>