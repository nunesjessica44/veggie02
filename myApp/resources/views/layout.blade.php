<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veggie02</title>

    <!-- CSS Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <!-- SCRIPTS -->
    <!-- font awesome-->
    <script src="https://kit.fontawesome.com/ab085ed52e.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    @yield('scriptjs')
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">veggie02</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">HOME</a>
                <a class="nav-link" href="{{ route('categoria') }}">Categorias</a>
                <a class="nav-link" href="{{ route('cadastrar') }}">Cadastrar</a>
                @if(!\Auth::user())
                <a class="nav-link" href="{{ route('logar') }}">Logar</a>
                @else
                <a class="nav-link" href="{{ route('compra_historico') }}">Minhas Compras</a>
                <a class="nav-link" href="{{ route('sair') }}">Logout</a>
                @endif
                
            </div>
        </div>
        <a href="{{ route('ver_carrinho') }}" class="btn btn-sm"> <i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row" style="margin:5%">
            <!-- Será adicionado conteúdo das outras telas -->
            @if($message = Session::get("err"))
            <div class="col-12">
                <div class="alert alert-danger">{{ $message }}</div>
            </div>
            @endif

            @if(\Auth::user())
                <div class="col-12">
                <p class="text-right">Seja bem vindo(a), {{ \Auth::user()->nome}}, <a href="{{ route('sair') }}">sair</a> </p>
                </div>
            @endif

            @if($message = Session::get("ok"))
            <div class="col-12">
                <div class="alert alert-success">{{$message}}</div>
            </div>
            @endif

            @yield('conteudo')
        </div>
    </div>
</body>

</html>