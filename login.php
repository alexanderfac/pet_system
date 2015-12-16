<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>   
</head>
<body>
	
	<header>
	
	<?php include "nav1.php"; ?>
	
	</header>
  
	
   <main>
		 
		
	         
  
	
			
			<div class="container">
		<div  class="input-field col s0 l4"></div>
		
    
  <div class="row">
<!--formulari de validacion de usuario-->
    <form method="POST" action="validar.php" class="col s12">
    
        <div class="row">
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="icon_prefix" type="text" class="validate" name="nuser" type="text">
          <label for="icon_prefix">usuario</label>
        </div>
       
      </div>
      
      <div class="row">
       <div class="input-field col s12 l6">
          <i class="material-icons prefix">vpn_key</i>
          <input id="icon_prefix" type="password" class="validate" name="npassword" type="password">
          <label for="icon_prefix">contraseña</label>
        </div>
      </div>
      
      </div>
    <button type="submit" class="waves-effect waves-light btn"><i class="material-icons prefix right">done</i>enviar</button>
		<p>
       No tienes Usuario? <a href="registro.php"> Registrate</a>
      </p>
    </form>
   
  </div>
	
  </div>
			
			


	
	
	
	
	</main>
	<!--pie de pagina con descripcion del la aplicacion para el usuario final e interfaz grafica-->
	
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
  $(".button-collapse").sideNav();
  </script>
	
<script>    $(document).ready(function(){
      $('.slider').slider({full_width: true});// funcion para el desplegable de la barra de navegacion
	
	
	$(document).ready(function(){
    // 
    $('.modal-trigger').leanModal();//esta funcion muestra el modal del formulario de registro
		 $('#modal2').leanModal();
		
  })
    });
	
	</script>
  </body>

</html>