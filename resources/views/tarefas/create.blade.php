<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creando Tarefas</title>
</head>
<body>
    <form action="/tarefas" method="post">
        @csrf
        <input type="text" name="texto" id="texto">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>