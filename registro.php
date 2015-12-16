<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>PET SYSTEM</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />    
</head>
<body>
	<header>
	<?php
	
	include("nav1.php");
	?>
		</header>
	
	<main>
	
		<?php
			include("slider.php");	 // llamo la barra de navegacion
				 ?>  
	
	 <div id="modal1" class="modal">
    <div class="modal-content">
			<div class="container">
     <div class="row">
			 <!--formulario de registro-->
    <form class="col s12" method="POST" action="insertar.php">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name='nombre' required>
          <label for="icon_prefix">nombre y apellido</label>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix ">local_post_office</i>
          <input id="email" type="email" class="validate" name='email'>
          <label for="email" data-error="Correo Invalido" data-success="right">Email</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">done</i>
            <input id="input_text1" type="password"  minlength="8" maxlength="8" name='password' required>
            <label for="input_text1">Contraseña</label>
          </div>
         <div class="input-field col s12">
           <i class="material-icons prefix ">done_all</i>
            <input id="input_text2" type="password" length="8" >
            <label for="input_text2">Confirmar Contraseña</label>
          </div>
        </div>
        <p>
      <input type="checkbox" id="test5" />
      <label for="test5">Acepto terminos y condiciones</label>
    </p>
         <button type="submit" class="waves-effect waves-light btn" onclick="validar()"><i class="material-icons prefix right">send</i>Registrar</button>
        <button type="reset" class="waves-effect waves-light btn"><i class="material-icons prefix right">clear</i>limpiar</button>
        <p>
        Ya estas Registrado <a href="login.php">Ingresar</a>
      </p>
    </form>
      
  </div>
    </div>
				</div>
    
  </div>
		 
		
		  		 
</main>
		
	
		       
         
		
		<footer class="page-footer amber darken-4 hide-on-med-and-down" style="width: 100%;height: 100%; position: relative; bottom: 0; left: 0;">
          <div class="container">
            <div class="row">
              <div class="col l4 s12">
                <h5 class="white-text">Pet System</h5>
                <p class="grey-text text-lighten-4">Por que el cuidado y la salud de nuestras mascotas tambien es importante</p>
              </div>
              <div class="col l4 s12">
                <h5 class="white-text">Lo que tenemos</h5>
                <ul  class="grey-text text-lighten-4">
                  <li>Mi mascota</li>
                  <li>La salud de mi mascota</li>
                  <li>tips de cuidado</li>
                  <li>toda una red social para el cuidado de tu mascota</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2015 Copyright sofbyalex - Design byDuvan
           
            </div>
          </div>
        </footer>
				
		 
		 
		 
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script>

   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script>
  $(".button-collapse").sideNav();
	function validar(){
	var	psw1=$("#input_text1").val();//verifico que las contraseñas sean corectas
	var	psw2=$("#input_text2").val();
	if(psw1==psw2){

		 alert("registro exitoso") // si todas las validaciones 
		 }
		 else {
			 alert("las contraseñas no coinciden") // en caso de que las contraseñas no esten corectas
		 		$("#input_text1").val("");
			 $("#input_text2").val("");
	    	$("#input_text1").focusin(); }
		
	}
	    $(document).ready(function(){
      $('.slider').slider( {height: 600});
    });
	
	$(document).ready(function(){

    
		$(".modal-trigger").leanModal();
		$('#modal1').closeModal();
  })
	

  </script>
		

</body>
</html>