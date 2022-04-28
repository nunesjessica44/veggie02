@if(isset($lista))
<div class="row">
    @foreach($lista as $prod)
        <div class="col-3 mb-3 d-flex aling-items-stretch">
            <div class="card">
                <img src="{{ asset($prod->foto) }}" alt="teste3" class="card-imag-top">
                <div class="card-body">
                <h6 class="card-title"> {{$prod->nome}} - R$ {{ $prod->valor}} </h6>
                <!--<a href="#" class="btn btn-secondary">Adicionar Item</a>-->
                <a href="{{ route('adicionar_carrinho', ['idproduto' => $prod->id ]) }}" class="btn btn-sm btn-secondary">Adicionar Item</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
 @endif