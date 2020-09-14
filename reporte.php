<?php 

//Declaro las variables iniciando vacias
$respuesta1 = 0;
$respuesta2 = 0;
$respuesta3 = 0;
$respuesta4 = 0;
$respuesta5 = 0;
$respuesta6 = 0;
$respuesta7 = 0;
$respuesta8 = 0;
$respuesta9 = 0;
$respuesta10 = 0;
$respuesta11 = 0;
$respuesta12 = 0;
$respuesta13 = 0;
$respuesta14 = 0;
$respuesta15 = 0;
$respuesta16 = 0;
$respuesta17 = 0;
$respuesta18 = 0;
$respuesta19 = 0;
$respuesta20 = 0;
$respuesta21 = 0;
$respuesta22 = 0;
$respuesta23 = 0;

$nombre = "Empresa Test";
$identidad = "88";

$respuesta1 = $_POST ["respuesta1"];
$respuesta2 = $_POST ["respuesta2"];
$respuesta3 = $_POST ["respuesta3"];
$respuesta4 = $_POST ["respuesta4"];
$respuesta5 = $_POST ["respuesta5"];
$respuesta6 = $_POST ["respuesta6"];
$respuesta7 = $_POST ["respuesta7"];
$respuesta8 = $_POST ["respuesta8"];
$respuesta9 = $_POST ["respuesta9"];
$respuesta10 = $_POST ["respuesta10"];
$respuesta11 = $_POST ["respuesta11"];
$respuesta12 = $_POST ["respuesta12"];
$respuesta13 = $_POST ["respuesta13"];
$respuesta14 = $_POST ["respuesta14"];
$respuesta15 = $_POST ["respuesta15"];
$respuesta16 = $_POST ["respuesta16"];
$respuesta17 = $_POST ["respuesta17"];
$respuesta18 = $_POST ["respuesta18"];
$respuesta19 = $_POST ["respuesta19"];
$respuesta20 = $_POST ["respuesta20"];
$respuesta21 = $_POST ["respuesta21"];
$respuesta22 = $_POST ["respuesta22"];
$respuesta23 = $_POST ["respuesta23"];
$respuesta24 = $_POST ["respuesta24"];


//Calculo las respuestas
$liderazgo = $respuesta1 + $respuesta2 + $respuesta3 + $respuesta4 + $respuesta5 + $respuesta6 + $respuesta7 + $respuesta8 + $respuesta9 + $respuesta10+ $respuesta12+ $respuesta13+ $respuesta14+ $respuesta15+ $respuesta16+ $respuesta17+ $respuesta18+ $respuesta19+ $respuesta20+ $respuesta21+ $respuesta22+ $respuesta23+ $respuesta24;

$referente_nacional = "100";
$referente_internacional = "120"; 


date_default_timezone_set("America/New_York");
$fecha = date("Y/m/d") . " - " . date("h:i:sa");

//Subo los datos a la DB
$servername = "localhost";
$username = "kgxelnjv_m4t";
$password = "antorch1!!q@";
$dbname = "kgxelnjv_m4t";

?>

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="/sabana/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body style="padding-top: 70px;">

<style type="text/css">
  .canvasjs-chart-credit{
    display: none !important;
  }

  .personales{
    text-transform: none !important;
  }
</style>


<div class="container">
 <div class="spacer"></div>

<div class="row">

<?php

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 

// $sql = "SELECT * FROM survey WHERE id = ". $_GET["identidad"] ." ";

// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row

//       $dataPoints = array( 
//         array("y" => $liderazgo, "label" => "Liderazgo" ),
//         array("y" => $referente_nacional, "label" => "Espacial" ),
//         array("y" => $referente_internacional, "label" => "Naturalista" ),
//       );


//      echo "<pre>";
//      var_dump($row);   
//      echo "</pre>";
//     }
// } else {
//     echo "Error!!:<br>" . $conn->error;
// }
$conn->close();
$dataPoints = array( 
  array("y" => $liderazgo, "label" => "Liderazgo" ),
  array("y" => $referente_nacional, "label" => "Espacial" ),
  array("y" => $referente_internacional, "label" => "Naturalista" ),
);

?>

</div>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title:{
    text: "Resultados"
  },
  axisY: {
    title: "Puntaje"
  },
  data: [{
    type: "column",
    yValueFormatString: "#,##0.## Puntos",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>

<style type="text/css">

.impar, .par, .encabezado{
  background-color: #FFFFFF;
}

.personales{
    background-color: #FFFFFF;
    color: #000000;
    padding: 20px 20px;
    height: auto;
    display: block;
    float: left;
    border-radius: 20px;
    margin-bottom: 50px;
    border-bottom: 3px solid #5f0100 !important;
    text-align: left;
    font-weight: bold;
    font-size: 17px;
    border: 1px solid #043673;
    text-transform: capitalize; 
}
  
</style>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>

<div class="spacer"></div>

<div class="container" style="margin-bottom: 80px;">

<?php
  rsort($respuestas);
?>

<div class="row encabezado">
  <div class="col-md-2  col-xs-2">Puntaje</div>
  <div class="col-md-2  col-xs-2">Aptitud</div>
  <div class="col-md-8  col-xs-8">Cuando elijas profesión ten en cuenta:</div>
</div>
<div class="row par">
  <div class="col-md-2  col-xs-1"><?php echo $respuestas[0][0]; ?></div>
  <div class="col-md-2  col-xs-3"><?php echo $respuestas[0][1]; ?></div>
  <div class="col-md-8  col-xs-8"><?php echo $respuestas[0][2]; ?></div>
</div>
<div class="row impar">
  <div class="col-md-2  col-xs-1"><?php echo $respuestas[1][0]; ?></div>
  <div class="col-md-2  col-xs-3"><?php echo $respuestas[1][1]; ?></div>
  <div class="col-md-8  col-xs-8"><?php echo $respuestas[1][2]; ?></div>
</div>
<div class="row par">
  <div class="col-md-2  col-xs-1"><?php echo $respuestas[2][0]; ?></div>
  <div class="col-md-2  col-xs-3"><?php echo $respuestas[2][1]; ?></div>
  <div class="col-md-8  col-xs-8"><?php echo $respuestas[2][2]; ?></div>
</div>
<div class="row impar">
  <div class="col-md-2  col-xs-1"><?php echo $respuestas[3][0]; ?></div>
  <div class="col-md-2  col-xs-3"><?php echo $respuestas[3][1]; ?></div>
  <div class="col-md-8  col-xs-8"><?php echo $respuestas[3][2]; ?></div>
</div>

</div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

</body>