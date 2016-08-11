<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.min.js"></script>

<canvas id="myChart"></canvas>

<?php   

//query database and get date label
$dateRow = CS50::query("SELECT date FROM vitals WHERE userId=?", $_SESSION["id"]);

//create a new array to store flattened array
$dates = array();

//convert into a single-dimensional array
foreach ($dateRow as $key)
{
  foreach($key as $value)
  {
      $dates[]=$value;
  }
  
}

//query pulse
$weightRow = CS50::query("SELECT weight FROM vitals WHERE userId=?", $_SESSION["id"]) ;

//convert into a single-dimensional array

$weight = array();

foreach ($weightRow as $key)
{
  foreach($key as $value)
  {
      $weight[]=$value;
  }
  
}

?>

<a class="btn btn-primary" href="addvitals.php" role="button">Add Data</a>

<script>

var ctx = document.getElementById("myChart").getContext("2d");
var myChart = new Chart(ctx, {

    type: 'line',
    data: {
        labels: <?php echo(json_encode($dates)); ?> , //comes from MySql database
        datasets: [{
            label: 'July 2016 Weight',
            data: <?php echo(json_encode($weight)); ?>  //comes from MySql database
        }] 
    },
    options: {
        responsive: true,

        }
    
});
</script>
    


