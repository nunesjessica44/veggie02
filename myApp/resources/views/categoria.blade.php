<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>categoria </h2>

    @if(isset($listaCategoria) && count($listaCategoria) > 0)
    <ul>
        @foreach($listaCategoria as $cat)
            <li>{{ $cat->categoria }}</li>
        @endforeach
    </ul>
    @endif

</body>
</html>