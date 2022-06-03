@extends("layout")
@section("scriptjs")
<script>
    $<(function(){
        $(".infocompra").on('click', function()=>{
            //ao clicar no info compra essa funcao sera executada
            let id = $(this).attr("data-value")
            $.post('{{route("compra_detalhes")}}', { idpedido : id}, (result)=>{
                //funcao de callback -- retorno do ajax
                $("#conteudopedido").html(result)
            })
        })
    })
</script>
@endsection
@section("conteudo")

<div class ="col-12">
    <h2>Minhas Compras</h2>
</div>

<div class ="col-12">
    <table class="table table-bordered">
        <tr>
            <th>Data da compra</th>
            <th>Situação</th>
            <th></th>
    </tr>

    @foreach($lista as $ped)
    <tr>

    <?php
    $pedData = DateTime::createFromFormat('Y-m-d H:i:s', $ped->dt_pedido);
    ?>
        <td>{{ $pedData->format('d/m/Y H:i:s') }}</td>
        <td>{{ $ped->statusDesc() }}</td>
        <td>
            <a href="#" class="btn btn-sm btn-info infocompra" data-value="{{$ped->id}}"data-toggle="modal" data-target="#modalcompra">
            <i class="fas fa-shopping-basket"></i>
        </td>
    </tr>
@endforeach
    </table>
</div>
<div class="modal-fade" id="modalcompra">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-tittle">Detalhes da Compra</h5>
            </div>
            <div class="modal-body">
                <div id="conteudopedido"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

@endsection