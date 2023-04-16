<?php

$numberOne = $_POST['numberOne'];
$numberTwo = $_POST['numberTwo'];
$numberThree = $_POST['numberThree'];



$addEmAllUp = $numberOne + $numberTwo + $numberThree;

$percentOne = round($numberOne / $addEmAllUp, 2); 
$percentTwo = round($numberTwo / $addEmAllUp, 2); 
$percentThree = round($numberThree / $addEmAllUp, 2); 
//$grandTotal = round($addEmAllUp, 2);

if(isset($_POST['submit'])) {

}


?>
<div class="answer container">
    <h1>Total Number: <b class="percentType"><?php echo $addEmAllUp ?></b></h1>
    <p class="percentTemp">First: <?php echo $percentOne ?> %</p>
    <p class="percentTemp">Second: <?php echo $percentTwo ?> %</p>
    <p class="percentTemp">Third: <?php echo $percentThree ?> %</p>


    <div class="chartBoxx">
            <canvas id="myChart"></canvas>
    </div>
</div>

<script>

const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['First', 'Second', 'Third'],
      datasets: [{
        label: 'Deficit Amount',
        data: [<?php echo $numberOne ?>, <?php echo $numberTwo ?>, <?php echo $numberThree ?>],
        borderWidth: 1,
        backgroundColor: ['#40310a', '#37400a', '#170a40']
      }]
    },
    options: {
      
    }
  });
  
  </script>