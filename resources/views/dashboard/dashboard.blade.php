@extends('adminlte::page')

@section('title', 'DASHBOARD')

@section('content_header')
<div class="iconUsuario">
    <img src="./img/dashboard.png">
    <p>DASHBOARD</p>
</div>



@stop

@section('content')
<div class="row col-6">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>




</body>

</html>




<!--div class="row" style="heightx:400px"-->
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')



@stop