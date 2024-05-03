<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
    
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Preço</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$book->title}}</td>
            <td>R$ {{$book->price}}</td>
            <td>{{$book->description}}</td>
        </tr>
    </tbody>
</table>

</body>
</html>
