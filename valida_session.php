<?php
//si el usuario esta logeado y tiene una sesion abiearta 
 session_start();
 if (!$_SESSION['NOMBRE']){
   header("location: login.php");
 }
		   
?>