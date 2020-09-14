<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>

<link rel="stylesheet" href="./sabana/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style type="text/css">
    
h2.subtitulo{
    text-align: center;
    font-weight: bolder;
    margin-top: 50px;
  }


</style>
<body id="body">

<div class="container">
	<!-- <img src="./sabana/logo.png" class="logo_principal"> -->
</div>

 <div class="spacer"></div>

	<div class="container">

    
	<h1>
		M4T<br>
		CORPORACIÓN CALIDAD<br>
  </h1>

<h2 class="subtitulo">Bienvenidos a la herramienta de autoevaluación del tema<br><strong>LIDERAZGO</strong></h2>
	<div class="spacer"></div>

	<p>
	<strong>INSTRUCCIONES</strong>
	<br><br>
	<strong>1.</strong> Confirme que seán los datos de su empresa y el item a evaluar.<br><br>
	<strong>2.</strong> Lea detenidamente cada afirmación y seleccione la opción que considere que más describe su comportamiento.<br><br>
  <strong>3.</strong> No hay un límite de tiempo para contestar. Lo importante es leer detenidamente cada afirmación y marcar con total sinceridad en la columna que describa más su comportamiento.<br><br><br>
  <strong>4.</strong> Al finalizar dé click en el botón "enviar resultados" para procesar sus respuestas.<br><br><br>
</p>
	
	<form action="resultados.php" method="post">
  	
  	<div class="row" id="my-node">
	 <div class="form-group personales" style="width: 100%; text-align: center;"> 
      <p for="nombre">Nombre: <strong> EMPRESA DE PRUEBA FELIZ S.A.S</strong></p>   
      <p for="nombre">NIT: <strong>98794321-9</strong></p>
      <!-- <input type="text" name="identidad" class="form-control" id="identidad" placeholder="Documento de identidad" value="874650-1" disable="true" required> -->
      <p for="nombre">Representante Legal:<strong> Jose Luis Penagos</strong></p>
      <p for="nombre">Autoevaluación en <strong>Liderazgo</strong></p>
      <!-- <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Su nombre" value="Jorge Aute" disable="true" required> -->
  	</div>
  </div>
  

  <style>
  @media (max-width: 767px) {
    .pregunta{
      margin: 15px 0;
      text-align: center;
    }

    .indicadores_letras{
      margin-top: 30px;
    }

    .personales input{
      width: 65%;
    }

    .personales label{
      width: 35%;
      padding-right: 10px;
    }

    h1 {
    font-size: 18px;
    text-align: center;
    line-height: 28px;
  }


  }
  </style>

  <!-- componente I -->
  <div class="componente">
  	<div class="row encabezado">
  		<div class="col-md-7 col-sm-5">
  				<H3>ESTILO DE LIDERAZGO</h3>
  		</div>
  		<div class="col-md-5 col-sm-7 indicadores_letras">
  			<div class="row">
  				<div class="col-md-55">
  				Se me facilita mucho
  				</div>
  				<div class="col-md-55">
  				Se me facilita
  				</div>
  				<div class="col-md-55">
  				Ni se me facilita ni se me dificulta
  				</div>
  				<div class="col-md-55">
  				Se me dificulta
  				</div>
  				<div class="col-md-55">
  				Se me dificulta mucho
  				</div>
  			</div>
  		</div>
  	</div>

  	<!-- Pregunta -->
    <div class="row impar">
  		<div class="col-md-7 col-sm-5">
  			<div class="row">
  				<div class="col-md-2 hidden-sm hidden-xs numero_indicador">
  					1
  				</div>
  				<div class="col-md-10 col-sm-12 pregunta">
  					Escribir textos
  				</div>
  			</div>
  		</div>
  		<div class="col-md-5 col-sm-7">
  			<div class="row">
  				<div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta1" id="inlineRadio1" value="4" required></div>
  				<div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta1" id="inlineRadio1" value="3" required></div>
  				<div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta1" id="inlineRadio1" value="2" required></div>
  				<div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta1" id="inlineRadio1" value="1" required></div>
  				<div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta1" id="inlineRadio1" value="0" required></div>
  			</div>
  		</div>
  	</div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row par">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            2
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Realizar dibujos
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta2" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta2" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta2" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta2" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta2" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row impar">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            3
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Estudiar el espacio, el sistema solar y los planetas
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta3" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta3" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta3" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta3" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta3" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row par">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            4
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Expresar el afecto a las personas
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta4" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta4" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta4" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta4" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta4" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row impar">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            5
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Resolver problemas matemáticos
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta5" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta5" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta5" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta5" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta5" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row par">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            6
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Combinar la expresión verbal con gestos
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta6" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta6" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta6" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta6" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta6" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row impar">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            7
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Identificar sus fortalezas y debilidades
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta7" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta7" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta7" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta7" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta7" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row par">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            8
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Memorizar la letra de las canciones
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta8" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta8" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta8" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta8" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta8" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

</div> <!-- Cierra componente I -->

  <!-- Componente II -->
  <div class="componente">
    <div class="row encabezado">
      <div class="col-md-7 col-sm-5">
      <H3> CULTURA ORGANIZACIONAL</h3>
      </div>
      <div class="col-md-5 col-sm-7 indicadores_letras">
        <div class="row">
          <div class="col-md-55">
          Se me facilita mucho
          </div>
          <div class="col-md-55">
          Se me facilita
          </div>
          <div class="col-md-55">
          Ni se me facilita ni se me dificulta
          </div>
          <div class="col-md-55">
          Se me dificulta
          </div>
          <div class="col-md-55">
          Se me dificulta mucho
          </div>
        </div>
      </div>
    </div>

    <!-- Pregunta -->
    <div class="row impar">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            9
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Hablar en público
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta9" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta9" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta9" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta9" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta9" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row par">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            10
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Interpretar gráficos
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta10" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta10" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta10" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta10" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta10" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row impar">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            11
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Analizar fenómenos de la naturaleza como terremotos o tsunamis
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta11" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta11" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta11" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta11" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta11" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row par">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            12
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Interactuar y ser empático con las personas
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta12" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta12" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta12" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta12" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta12" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row impar">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            13
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Comprender las relaciones causa – efecto
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta13" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta13" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta13" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta13" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta13" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row par">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            14
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Practicar deporte
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta14" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta14" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta14" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta14" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta14" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row impar">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            15
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Reconocer los errores que comete
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta15" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta15" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta15" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta15" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta15" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row par">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            16
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Crear sonidos y melodías con objetos
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta16" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta16" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta16" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta16" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta16" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->
</div> <!-- Cierra componente II -->

<!-- componente 1 -->
  <div class="componente">
    <div class="row encabezado">
      <div class="col-md-7 col-sm-5">
          <h3> ETICA, TRANSPARENCIA Y GOBIERNO CORPORATIVO</h3>
      </div>
      <div class="col-md-5 col-sm-7 indicadores_letras">
        <div class="row">
          <div class="col-md-55">
          Se me facilita mucho
          </div>
          <div class="col-md-55">
          Se me facilita
          </div>
          <div class="col-md-55">
          Ni se me facilita ni se me dificulta
          </div>
          <div class="col-md-55">
          Se me dificulta
          </div>
          <div class="col-md-55">
          Se me dificulta mucho
          </div>
        </div>
      </div>
    </div>

    <!-- Pregunta -->
    <div class="row impar">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            17
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Narrar historias
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta17" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta17" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta17" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta17" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta17" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row par">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            18
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Armar rompecabezas
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta18" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta18" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta18" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta18" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta18" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row impar">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            19
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Analizar la estructura de los seres vivos y los compuestos que los conforman en laboratorios
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta19" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta19" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta19" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta19" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta19" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row par">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            20
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Orientar a las personas para buscar soluciones a sus problemas
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta20" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta20" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta20" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta20" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta20" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row impar">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            21
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Interpretar datos estadísticos
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta21" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta21" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta21" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta21" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta21" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row par">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            22
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Identificar sensaciones físicas como frío o calor
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta22" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta22" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta22" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta22" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta22" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row impar">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            23
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Expresar sus sentimientos
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta23" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta23" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta23" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta23" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta23" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

    <!-- Pregunta -->
    <div class="row par">
      <div class="col-md-7 col-sm-5">
        <div class="row">
          <div class="col-md-2 hidden-sm hidden-xs numero_indicador">
            24
          </div>
          <div class="col-md-10 col-sm-12 pregunta">
            Reproducir la melodía de las canciones
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-7">
        <div class="row">
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta24" id="inlineRadio1" value="4" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta24" id="inlineRadio1" value="3" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta24" id="inlineRadio1" value="2" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta24" id="inlineRadio1" value="1" required></div>
          <div class="col-md-55"><input class="form-check-input" type="radio" name="respuesta24" id="inlineRadio1" value="0" required></div>
        </div>
      </div>
    </div>
    <!-- /Pregunta -->

</div> <!-- Cierra componente I -->





<button type="submit" class="btn btn-primary enviar">Enviar Resultados</button>

  </form>
 </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>

</body>