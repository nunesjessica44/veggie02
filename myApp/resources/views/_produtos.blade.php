@if(isset($lista))
    @foreach($lista as $prod)
        <div class="col-3 mb-3">
            <div class="card">
                <img src="{{ asset($prod->foto) }}" alt="teste3" class="card-imag-top">
                <h6 class="card-title"> {{$prod->nome}} - R$ {{ $prod->valor}} </h6>
                <a href="#" class="btn btn-secondary">Adicionar Item</a>
            </div>
        </div>
    @endforeach
 @endif