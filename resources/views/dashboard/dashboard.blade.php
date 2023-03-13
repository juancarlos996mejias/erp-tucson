@extends('adminlte::page')

@section('title', 'DASHBOARD')

@section('content_header')
<div class="iconUsuario">
  <img src="./img/dashboard.png">
  <p>DASHBOARD</p>
</div>



@stop

@section('content')


<div class="d-flex justify-content-around">

  <div class="row col-5 justify-content-around">
    <canvas id="myChart"></canvas>
  </div>

  <div class="row col-3">
    <canvas id="chartLine"></canvas>
  </div>
</div>

<div class="d-flex justify-content-around">
  <div class="row col-3">
    <canvas id="chartBar"></canvas>
  </div>

  <div class="row col-5 mt-4">
    <canvas id="chartBar2"></canvas>
  </div>

</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: 'ENTRADAS',
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




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const gra = document.getElementById('chartLine');

  new Chart(gra, {
    type: 'doughnut',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: 'PRODUCTOS',
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




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const gra2 = document.getElementById('chartBar');

  new Chart(gra2, {
    type: 'doughnut',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: 'VENTAS',
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



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const gra3 = document.getElementById('chartBar2');

  new Chart(gra3, {
    type: 'bar',
    data: {
      labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
      datasets: [{
        label: 'SALIDAS',
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
<br>
<br>

</body>

</html>




<!--div class="row" style="heightx:400px"-->
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')



@stop