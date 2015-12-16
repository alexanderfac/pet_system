<!--esta es la barra de navegacion de la aplicacion-->
<nav>
    <div class="nav-wrapper  green darken-3">
      <a href="#!" class="brand-logo"><img style="width: 100px; height: 70px;"src="imagen/logo pet.png"alt=""></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">pets</i></a>
      <ul class="right hide-on-med-and-down">
        
     
         <li><?php //verifico si existe o no una sesion iniciada
					 if(isset($_SESSION['NOMBRE'])) { 
                                                 echo "<a href='mascota.php'>Mis mascotas</a>"; // reemplazo segun sea comveniente en la pagina que este el usuario
                                                  } 
          else echo "<a class='  modal-trigger ' href='#modal1' >Registro</a>";
          ?>
        </li>
        <li><?php //verifico si existe o no una sesion iniciada
					if(isset($_SESSION['NOMBRE'])) { 
                                                 echo "<a href='logout.php'>Salir</a>";
                                                  } 
          else echo "<a href='login.php'>Ingresar</a>";
          ?></li>
				   <li><?php //verifico si existe o no una sesion iniciada
						 if(isset($_SESSION['NOMBRE'])) { $nomb=$_SESSION['NOMBRE'];
                                                 echo "<a href='#'>".$nomb."</a>";
                                                  } 
          else echo "<a href='registro.php'>Acerca de nosotros</a>";// reemplazo segun sea comveniente en la pagina que este el usuario
          ?></li>
				
      </ul>
      <ul class="side-nav" id="mobile-demo">
        
        
         <li><?php //verifico si existe o no una sesion iniciada
					 if(isset($_SESSION['NOMBRE'])) { 
                                                 echo "<a href='mascota.php'>Mis mascotas</a>";// reemplazo segun sea comveniente en la pagina que este el usuario
                                                  } 
          else echo "<a class=' modal-trigger ' href='#modal1'>Registro</a>";
          ?></li>
        <li><?php //verifico si existe o no una sesion iniciada
					if(isset($_SESSION['NOMBRE'])) { 
                                                 echo "<a href='logout.php'>Salir</a>";// reemplazo segun sea comveniente en la pagina que este el usuario
                                                  } 
          else echo "<a class=' modal-trigger' href='#modal2'>Ingresar</a>";  
          ?></li>
				<li><?php //verifico si existe o no una sesion iniciada
					if(isset($_SESSION['NOMBRE'])) { $nomb=$_SESSION['NOMBRE'];
                                                 echo "<a href='#'>".$nomb."</a>";// reemplazo segun sea comveniente en la pagina que este el usuario
                                                  } 
          else echo "<a href='registro.php'>Acerca de nosotros</a>";
          ?></li>
      </ul>
    </div>
  </nav>

	