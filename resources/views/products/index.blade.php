<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos</h1>
    <a href="/create">Criar produto</a>

    <ul>
        @foreach ($products as $item)
            <li>{{$item->name}} - {{$item->price}}</li>
        @endforeach
    </ul>
</body>
</html>