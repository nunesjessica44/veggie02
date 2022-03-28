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

</head>

<body>

    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">veggie02</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="#">HOME</a>
                <a class="nav-link" href="#">Categorias</a>
                <a class="nav-link" href="#">Cadastrar</a>
            </div>
        </div>
        <a href="#" class="btn btn-sm"> <i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="contaiber">
        <div class="row">
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto1-cacal.jpg') }}" alt="teste3" class="card-imag-top">
                    <h6 class="card-title"> Cacal </h6>
                    <a href="#" class="btn btn-secondary">Adicionar Item</a>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto2-sucoMaca.jpg') }}" alt="teste3" class="card-imag-top">
                    <h6 class="card-title"> Suco de Maça </h6>
                    <a href="#" class="btn btn-secondary">Adicionar Item</a>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto3-acucarCoco.jpg') }}" alt="teste3" class="card-imag-top">
                    <h6 class="card-title"> Açucar de Coco </h6>
                    <a href="#" class="btn btn-secondary">Adicionar Item</a>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto4-farinhaCoco.jpg') }}" alt="teste3" class="card-imag-top">
                    <h6 class="card-title"> Farinha de Coco </h6>
                    <a href="#" class="btn btn-secondary">Adicionar Item</a>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto5-farinhaAmendoa.jpg') }}" alt="teste3" class="card-imag-top">
                    <h6 class="card-title"> Farinha de Amêndoa </h6>
                    <a href="#" class="btn btn-secondary">Adicionar Item</a>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto6-azeitona.jpg') }}" alt="teste3" class="card-imag-top">
                    <h6 class="card-title"> Cacal </h6>
                    <a href="#" class="btn btn-secondary">Azeitona</a>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto7-azeiteOliva.jpg') }}" alt="teste3" class="card-imag-top">
                    <h6 class="card-title"> Azeite de Oliva </h6>
                    <a href="#" class="btn btn-secondary">Adicionar Item</a>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto8-nozes.jpg') }}" alt="teste3" class="card-imag-top">
                    <h6 class="card-title"> Nozes </h6>
                    <a href="#" class="btn btn-secondary">Adicionar Item</a>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto9-proteinaSoja.jpg') }}" alt="teste3" class="card-imag-top">
                    <h6 class="card-title"> Proteina de Soja </h6>
                    <a href="#" class="btn btn-secondary">Adicionar Item</a>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto10-proteinaSoja2.jfif') }}" alt="teste3" class="card-imag-top">
                    <h6 class="card-title"> Proteina de Soja </h6>
                    <a href="#" class="btn btn-secondary">Adicionar Item</a>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto11-sucoUva.jpg') }}" alt="teste3" class="card-imag-top">
                    <h6 class="card-title"> Suco de Uva </h6>
                    <a href="#" class="btn btn-secondary">Adicionar Item</a>
                </div>
            </div>
        </div>
    </div>









    <!-- SCRIPTS -->
    <!-- font awesome-->
    <script src="https://kit.fontawesome.com/ab085ed52e.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>