@extends('layout')
@section('conteudo')

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
        <td></td>
    </tr>
@endforeach
    </table>
</div>

@endsection