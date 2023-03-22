@extends('adminlte::page')

@section('title', 'DASHBOARD')

@section('content_header')
<div class="iconUsuario">
  <img src="./img/dashboard.png">
  <p>DASHBOARD</p>
</div>



@stop

@section('content')


<div class="d-flex justify-content-around bg-secondary">

  <div class="row col-3 justify-content-around">
    <canvas id="myChart" width="100" height="100"></canvas>
  </div>

  <div class="row col-3">
    <canvas id="chartLine" width="100" height="100"></canvas>
  </div>
</div>

<div class="d-flex justify-content-around bg-secondary">
  <div class="row col-3 mt-4">
    <canvas id="chartBar" width="100" height="100"></canvas>
  </div>

  <div class="row col-3 mt-4">
    <canvas id="chartBar2" width="100" height="100"></canvas>
  </div>

</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  const ctx = document.getElementById('myChart');
  Chart.defaults.color = '#fff'
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
  const gra = document.getElementById('chartLine').getContext("2d");
  Chart.defaults.color = '#fff'
  new Chart(gra, {
    type: 'radar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: 'PRODUCTOS',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgb(244, 208, 63)',
        
        ],
        
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        x: {
          stacked: true
        },
        y: {
          stacked: true
        }
      }
    }
  });
</script>




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const gra2 = document.getElementById('chartBar');
  Chart.defaults.color = '#fff'
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
      plugins: {
        legend: {
          position: 'right'
        }
      },
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
  Chart.defaults.color = '#fff'
  new Chart(gra3, {
    type: 'bar',
    data: {
      labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
      datasets: [{
        label: 'SALIDAS',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgb(93,173, 226)',
          'rgb(187, 143, 206)',
          'rgb(247, 220, 111)',
          'rgb(130, 224, 170)',
          'rgb(243, 156, 18)',
          'rgb(241, 148, 138)',


        ],
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