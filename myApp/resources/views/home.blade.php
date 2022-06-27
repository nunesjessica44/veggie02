
@extends('layout')
@section('conteudo')


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" >
  <div class="carousel-indicators">
 
  </div>

  <style>
    .palavrameio{
      font-size:30px;

    }
      #carouselExampleControls{
        border:10px;
        border-radius:20px;
      }
.carousel-control-prev{
         background-color: black;
color:black:
        }
        .carousel-control-next{
          background-color: black;
color:black: 
        }
  </style>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="/images/1m.png" class="d-block w-100 " id="carouselExampleControls" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="palavrameio">+ Saudável</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/2m.png" class="d-block w-100" id="carouselExampleControls" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="palavrameio">+ Pratico</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/3m.png" class="d-block w-100" id="carouselExampleControls" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="palavrameio">+ Veggie0²</h5>
      </div>
    </div>
  </div>
  <button id="carouselExampleControls" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button id="carouselExampleControls" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Proximo</span>
  </button>
</div>
<pre> <h3>Produtos</h3></pre>

    @include('_produtos', ['lista' => $lista])
@endsection

