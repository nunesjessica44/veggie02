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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    @yield('scriptjs')
</head>

<body>


<style>
    html, body{
margin: 0;
padding: 0;
height: 100%;
}

#a{
    font-size:20px;
    color:black; 
}
nav{
    background-color:#F8f9fa;
}
#img{
    width: 190px;
}
#img2{
    width: 150px;
}
#linhas{
    background-color: rgba(0, 0, 0, 0.05);
}
.dark-mode2 {
   color:white;
    background-color:white;
}
.dark-mode1 {
  background-color: #4F4F4F;
  color:white;
}
.dark-mode {
  background-color:#828282;
  
}

footer{
background-color:#F8f9fa;
position:absolute ;
left: 0px;
width:100%;
    }
#ico{
        font-size:24px;
    }
</style>
     <nav id="nafocolor" class="navbar navbar-light navbar-expand-md pl-5 pr-5 mb-5">
     <img src="/images/icone33.png" id="img" class="rounded float-start" alt="...">
        <div class="collapse navbar-collapse  justify-content-center">
            <div class="navbar-nav">
            <a class="nav-link p-3" id="a" href="{{ route('home') }}">Home</a>
                <a class="nav-link p-3" id="a" href="{{ route('categoria') }}">Categorias</a>
                <a class="nav-link p-3" id="a" href="{{ route('cadastrar') }}">Cadastrar</a>
                @if(!\Auth::user())
                <a class="nav-link p-3" id="a" href="{{ route('logar') }}">Logar</a>
                @else
                <a class="nav-link p-3" id="a" href="{{ route('compra_historico') }}">Minhas Compras</a>
                <a class="nav-link p-3" id="a" href="{{ route('sair') }}">Logout</a>
                @endif
            </div>
        </div>
        <button id="txtrect" onclick="myFunction()">Escuro</button>

            <script>
              
                function myFunction() {
                    document.getElementById("txtrect").innerHTML = "Claro";

                    var img = document.getElementById('img').src;
             if (img.indexOf('icodarck.png')!=-1) {
            document.getElementById('img').src  = '/images/icone33.png';
        }
         else {
           document.getElementById('img').src = '/images/icodarck.png';
       }
    //   js img2
    var img = document.getElementById('img2').src;
           if (img.indexOf('icodarck.png')!=-1) {
            document.getElementById('img2').src  = '/images/icone33.png';
        }
         else {
           document.getElementById('img2').src = '/images/icodarck.png';
       }
    // darkmode 
    
                    var element = document.getElementById("a");
                    element.classList.toggle("dark-mode1");
                    var element = document.getElementById("linhas");
                    element.classList.toggle("dark-mode2");
                    var element = document.getElementById("nafocolor");
                    element.classList.toggle("dark-mode1");
                    var element = document.getElementById("footer");
                    element.classList.toggle("dark-mode1");
                      var element = document.body;
                     element.classList.toggle("dark-mode");}
            </script>

        <a href="{{ route('ver_carrinho') }}" class="btn btn-sm p-3" id="a"> <i class="fa fa-shopping-cart"></i></a>
    </nav>
 <div id="linhas" class="text-center p-1" style=" margin-top:-50px;">
</div>
    

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

<!-- footer -->

<div class="footer">
<footer id="footer" class="text-center text-lg-start  ">
  
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="me-5 d-none d-lg-block">
        <img src="/images/icone33.png" id="img2" class="rounded float-start" alt="...">
    </div>
    <div>
      <a href="https://www.facebook.com/" id="ico" class="me-4 text-reset">
      <i class="fab fa-facebook-f"></i>
      </a>
      
      <a href="http://instagram.com/" id="ico" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>

      <a href="https://linkedin.com/" id="ico" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>

      <a href="https://github.com/nunesjessica44/veggie02" id="ico" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    
  </section>
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            <i class=""></i>VeggieO²
          </h6>
          <p>
            A vida é feita de momentos e de sabores, aproveite cada sabor ao lado de alguem que você ame.
          </p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Produtos
          </h6>
          <p>
            <a href="{{ route('home') }}" class="text-reset">Home</a>
          </p>
          <p>
            <a href="{{ route('categoria') }}" class="text-reset">Categorias</a>
          </p>
          <p>
            <a href="{{ route('cadastrar') }}" class="text-reset">Cadastrar</a>
          </p>
          <p>
            <a href="{{ route('logar') }}" class="text-reset">Logar</a>
          </p>
        </div>
       
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Contato
          </h6>
          <p><i class="fas fa-home me-3"></i> Brasil São paulo</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            veggieO2@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 11 99015-2646</p>
          <p><i class="fas fa-print me-3"></i> + 11 99015-2646</p>
        </div>
      </div>
    </div>
  </section>
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold">VeggieO2.com</a>
  </div>

</footer>
</div>
</html>