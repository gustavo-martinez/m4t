
<?php require 'header.php' ?>

<div class="spacer"></div>
	<div class="container">
    <h1>
      M4T<br>
      CORPORACIÓN CALIDAD<br>
    </h1>

    <h2 class="subtitulo">
      Bienvenidos a la herramienta de autoevaluación del tema<br><strong>LIDERAZGO</strong>
    </h2>
	<div class="spacer"></div>

	<form action="liderazgo.php" method="post">
    <div class="row" id="my-node">
      <div class="form-group personales" style="width: 100%; text-align: center;"> 
        <p for="nombre">Nombre: <strong>
          <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre de la empresa" autocomplete="off" required>
        </p>
        <p for="nombre">NIT: <strong>
          <input type="text" name="nit" class="form-control" id="nit" placeholder="NIT" autocomplete="off" required>
        <p>
        <p for="nombre">PIN: <strong>
          <input type="text" name="pin" class="form-control" id="pin" placeholder="PIN" autocomplete="off" required>
        <p>
      </div>
    </div>
    <button type="submit" class="btn btn-primary enviar">Ingresar</button>
  </form>

 </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>

</body>