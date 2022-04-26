@extends('layout')
@section('conteudo')
    <div class="col-2">

    @if(isset($listaCategoria) && count($listaCategoria) > 0)
    <ul>
        <li><a href="{{ route('categoria') }}">Todas</a></li>
        @foreach($listaCategoria as $cat)
            <li><a href="{{ route(('categoria_por_id'), ['idcategoria' => $cat->id]) }}">{{ $cat->categoria }}</a></li>
        @endforeach
    </ul>
    @endif
</div>
<div class="col-10">
    @include('_produtos', ['lista' => $lista])   
</div>
@endsection
