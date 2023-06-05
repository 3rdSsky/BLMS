<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>try</title>
    <link href="css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="trychart">
  <canvas class="" id="myChart2"></canvas>
</div>
<div class="trythis"></div>
<button id="customer" onClick="showorhide()">click me</button>
<button>hide me</button>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx1 = document.getElementById('myChart2');

  new Chart(ctx1, {
    type: 'doughnut',
    data: {
      labels: ['Appointment','Accepted apt', 'Rejected apt'],
      datasets: [{
        label: 'Appointment',
        data: [12, 2, 9, 10],
        borderWidth: 1
      }]
    },
    options: {
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<script>
  let customer = document.querySelector('.trychart');
  let expe = document.querySelector('.trythis');

  let showorhide = function(){
    expe.style.display = 'none';
    customer.style.display = 'block';
  }

  let
</script>