<?php 
// salir de forma correcta de la sesion
   SESSION_START();//inicia sesion
   SESSION_UNSET();// destruye las variables de sesion
   SESSION_DESTROY();//cierra la sesion
  
   header("location: login.php"); // redirige al login de la aplicacion
?> 