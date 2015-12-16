<?php include "valida_session.php"; ?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>BIENVENIDO</title>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>
	</head>

	<body>

		<?php include "nav1.php"; ?> <!--se incluye la barra de navegacion -->
		<!--en esta pantalla se muestra el formulario de registro de las mascotas-->

			<h2 style="text-align: center;">Conozcamos más de tus mascotas</h2>
			<div class="row">
				<form class="col s12" method="POST" action="isertarmasc.php" enctype="multipart/form-data">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">sort by alpha</i>
							<input id="icon_prefix" type="text" class="validate" name='nombrem' required>
							<label for="icon_prefix">Nombre mascota</label>
						</div>

						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix ">import export</i>
								<select id="icon_prefix" name="tipo">
									<option value="perro"></option>
									<option value="perro">Perro</option>
									<option value="gato">Gato</option>
								</select>
								<label for="icon_prefix" data-error="Correo Invalido" data-success="right">Tipo</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">library all</i>
								<input id="input_text1" type="text" maxlength="15" name='raza'>
								<label for="input_text1">Raza</label>
							</div>
							 <input type="date" class="datepicker" name="fecha">
							<div class="file-field input-field">
      <div class="btn">
        <span>Cargar foto</span>
        <input type="file" name= "imag">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" name="foto">
      </div>
    </div>
						</div>

						<button type="submit" class="waves-effect waves-light btn" onclick="validar()"><i class="material-icons prefix right">send</i>Registrar</button>
						<button type="reset" class="waves-effect waves-light btn"><i class="material-icons prefix right">clear</i>Limpiar</button>

				</form>


				<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
				<script type="text/javascript" src="materialize/js/materialize.min.js"></script>

				<script>
					$(document).ready(function() {
						$('select').material_select();

					});
					
  $(".button-collapse").sideNav();
				
					$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
 
				</script>

	</body>

	</html>