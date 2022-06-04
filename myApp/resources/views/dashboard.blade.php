@extends('layout')
@section('conteudo')

<div class ="col-12">
    <h2>Pedidos Pendentes</h2>
</div>

<div class ="col-12">
    <table class="table table-bordered">
        <tr>
            <th>Data da compra</th>
            <th>Situação</th>
            <th></th>
    </tr>
    
    @php
    $pendende = 0;
    $finalizado = 0;
    @endphp

    @foreach($lista as $ped)
    <tr>

    <?php
    $pedData = DateTime::createFromFormat('Y-m-d H:i:s', $ped->dt_pedido);
    ?>
        <td>{{ $pedData->format('d/m/Y H:i:s') }}</td>
        <td>{{ $ped->statusDesc() }}</td>
        <td></td>
    </tr>

    @php
        if($ped->status == "PEN"){
            $pendende++; 
        }

        if($ped->status == "FIN"){
            $finalizado++; 
        }
    @endphp
@endforeach

        
    </table>
</div>




<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'pedidos por status'],
          ['pendente', <?php  echo $pendende; ?>],
          ['finalizado',  <?php  echo $finalizado; ?>]
        
        ]);

        var options = {
          title: 'pedidos por status',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>










@endsection