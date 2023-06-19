@extends('adminlte::page')

@section('title', 'DASHBOARD')

@section('content_header')
<div class="iconUsuario">
  <img src="./img/dashboard.png">
  <p>DASHBOARD</p>
</div>



@stop

@section('content')


<body>



  <div class="container">
    <div class="row">

<div class="col p-3">
      <div class="card" style=" width: 15em;" id="principal">
        <div class="card-header" id="headerVentas">VENTAS</div>
        <div class="card-body" id="bodyVentas">
        <i class="fa fa-dollar-sign"></i>
          <div class="number">
          <p>234</p>
          </div>
          
        </div>
      </div>
      </div>

      <div class="col p-3">
      <div class="card" style=" width: 15em;" id="principal">
        <div class="card-header" id="headerUsuario">ENTRADAS</div>
        <div class="card-body" id="bodyUsuario">
        <i class="fa fa-arrow-right"></i>
        <div class="number">
          <p> 352</p>
          </div>
        </div>
      </div>
      </div>

      <div class="col p-3">
      <div class="card " style="width: 15em;" id="principal">
        <div class="card-header" id="headerInventario">SALIDAS</div>
        <div class="card-body" id="bodyInventario">
        <i class="fa fa-door-open"></i>
        <div class="number">
          <p> 420</p>
          </div>
        </div>
      </div>
      </div>

      <div class="col p-3">
      <div class="card " style="width: 15em;" id="principal">
        <div class="card-header" id="headerLogistica">PRODUCTOS</div>
        <div class="card-body" id="bodyLogistica">
          <i class="fa fa-boxes"></i>
          <div class="number">
          <p> 6420</p>
          </div>
        </div>
      </div>
      </div>

    </div>
  </div>
</body>

</html>

<br>
<br>
<br>
<br>



<div class="d-flex justify-content-around bg-primary">
  <div class="row col-3">
    <canvas id="chartBar" width="150" height="150"></canvas>
  </div>

  <div class="row col-3">
    <canvas id="chartBar2" width="150" height="150"></canvas>
  </div>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  const ctx = document.getElementById('myChart');
  Chart.defaults.color = '#0000';
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









<!--div class="row" style="heightx:400px"-->
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')



@stop