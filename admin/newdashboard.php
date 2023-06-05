<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>try</title>
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="chart-container" style="position: relative; height:100vh; width:100vw">
    <canvas id="myChart"></canvas>
</div>



<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Yesterday Sales','Last Sevendays', 'Total Sales'],
      datasets: [{
        label: '',
        data: [12, 2, 9, 10],
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