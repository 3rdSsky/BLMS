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
<div>
  <canvas class="trychart" id="myChart2"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx1 = document.getElementById('myChart2');

  new Chart(ctx1, {
    type: 'bar',
    data: {
      labels: ['Appointment','Accepted apt', 'Rejected apt'],
      datasets: [{
        label: 'Sales',
        data: [12, 2, 9, 10],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });
</script>