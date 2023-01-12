<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar produto</h1>
    <form action="/update/ {{ $product->id }}" method="POST">
        @csrf   
        <input name="name" value="{{ $product->name }}">
        <input name= "description" value="{{ $product->description }}">
        <input name="price" value="{{ $product->price }}" type="number" step="any">
        <button type="submit">Enviar</button>


    </form>
</body>
</html>