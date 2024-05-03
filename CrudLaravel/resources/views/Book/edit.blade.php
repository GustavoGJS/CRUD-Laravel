<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

</head>
<body>
<div>
<h1>Edite seu Livro</h1>
<form action="{{route('book.update', $book->id)}}" method="POST">
    @csrf
    @method('PUT')
    <span>Titulo:</span>
    <input type="text" name="title" value="{{$book->title}}">   
    <span>Autor:</span>
    <input type="text" name="author" value="{{$book->author}}">  
    <span>Descrição:</span>
    <input type="text" name="description" value="{{$book->description}}">   
    <span>Preço:</span> 
    <input type="number" name="price" value="{{$book->price}}">   

    <button type="submit">Salvar</button>
</form>
</div>
</body>
</html>
