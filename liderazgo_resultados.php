
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
$referente_internacional = "100"; 


date_default_timezone_set("America/New_York");
$fecha = date("Y/m/d") . " - " . date("h:i:sa");

//Subo los datos a la DB
$servername = "localhost";
$username = "kgxelnjv_m4t";
$password = "antorch1!!q@";
$dbname = "kgxelnjv_m4t";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO m4t (id,nombre,liderazgo) VALUES ('".$identidad."','".$nombre."','".$liderazgo."')";


 if ($conn->query($sql) === TRUE) {
	$icon_answer = "yes.png";
	$respuesta_resultado = "
	<br>
	Tus resultados se han enviado satisfactoriamente al correo electrónico: 
	<br><strong>Sirvio</strong><br>
	-- No olvides revisar tu buzón de spam --<br><br>
	Para más información y conocer de forma detallada tus resultados dirígete a Ad portas café bolsa primer piso.";
	
	// llamo los mismos resultados que acabo de insertar para tenerlos listos para el email:

	// $sql_llamado = "SELECT * FROM survey WHERE id = ". $identidad ." ";
	// $result = $conn->query($sql_llamado);

	// if ($result->num_rows > 0) {
	// 	while($row = $result->fetch_assoc()) {

	// 		$respuestas = array( 
	// 			array($row["linguistica"], "Linguistica", "La presentan escritores, periodistas, poetas, oradores y comediantes cuentan con este tipo de habilidades.", "Comunicacion Social, educación"),
	// 			array($row["espacial"], "Espacial","Es muy notable en arquitectos, pintores, escultores, marinos, fotógrafos, cineastas y planeadores estratégicos.", "Comunicacion Social, educación"),
	// 			array($row["naturalista"], "Naturalista","Es importante en biólogos, ingenieros, agrónomos, ecologistas, ambientalistas, veterinarios y geólogos.", "Comunicacion Social, educación"),
	// 			array($row["interpersonal"], "Interpersonal","Es muy importante en personas que se dedican a la docencia, ventas, relaciones públicas, mercadotecnia, ministerios religiosos.", "Comunicacion Social, educación"),
	// 			array($row["logico_matematica"], "Lógico Mátematica", "Es importante para ingenieros, científicos, economistas, actuarios, contadores, detectives, administradores.", "Comunicacion Social, educación"),
	// 			array($row["corporal"], "Corporal", "Importante para atletas, cineastas, cirujanos, bailarines.", "Comunicacion Social, educación"),
	// 			array($row["intrapersonal"], "Intrapersonal", "Es notable en filósofos, psicólogos, sacerdotes, creativos.", "Comunicacion Social, educación"),
	// 			array($row["musical"], "Musical","La presentan músicos, cantantes,compositores e ingenieros de sonido.", "Comunicacion Social, educación")
	//   		);
	// 	} 
	// rsort($respuestas);
	// }
}
 else {
	$icon_answer = "no.png";
	$respuesta_resultado = "Error!!:<br>" . $conn->error;
	$respuestas = 0;
}

$conn->close();

?>

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
<link rel="stylesheet" href="/sabana/style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">



</head>
<body>
 <div class="spacer"></div>


<div class="container">
	
	<h1>¡AQUI TIENES TUS RESPUESTAS EN LIDERAZGO!</h1>

 <div class="spacer"></div>

<br><br>
<?php 
echo("Id = " . $identidad);echo("<br>");
echo("Nombre = " .$nombre);echo("<br>");
echo("puntaje = " .$liderazgo);echo("<br>");
?>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

</body>