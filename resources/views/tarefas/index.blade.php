<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Principal</title>
    <link rel="stylesheet" href="app.php">
</head>
<body>
    <div class="container">
       
        <a href="/tarefas/create">Criar novas tarefas</a>
        <table>
                @foreach ($tarefas as $t)
            <tr>
                <td> {{ $t['texto'] }}</td>
                <td>
                <a href="/tarefas/{{ $t['id'] }}/edit">Editar</a> | <a href="">Remover</a>
                </td>
            </tr>
            @endforeach
        </table>
        
    </div>
</body>
</html>