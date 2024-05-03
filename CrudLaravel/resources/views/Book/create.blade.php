<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
<div>
    <h1>Adicione seu Livro</h1>
    <form action="{{route('book.store')}}" method="POST">
        @csrf
        
        <span>Titulo:</span>
        <input type="text" name="title">
        <span>Autor:</span>
        <input type="text" name="author">
        <span>Descrição:</span>
        <input type="text" name="description">
        <span>Preço:</span> 
        <input type="text" name="price">

        <button type="submit">Adicionar</button>
    </form>
</div>
</body>
</html>
