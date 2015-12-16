<?php
 
$usuario = $_POST['nuser'];
$pass = $_POST['npassword'];



//Variables de conexion a la base de datos 
$host='localhost'; // Nombre del host  
$username='root'; // usuarioMysql  
$password="alex"; // password Mysql  
$db_name='pet_system'; // Nombre de la BD 
//$tbl_name='usuarios'; // Nombre d ela tabla 

$bd = mysql_connect("$host","$username","$password") or die("cannot connect"); //En caso de error 
mysql_select_db("pet_system", $bd); 

$sql="SELECT idusuario FROM usuario WHERE correo ='$usuario' AND contrasena = '$pass'"; 
##echo $sql; exit;
##aaa'; update usuarios set nombre='alex'; -- 
mysql_query($sql);
 
$comprobar = mysql_query($sql);
if (mysql_num_rows($comprobar)>0){
  $id_usuario=mysql_result($comprobar,0);
 
   SESSION_START();
  
  $_SESSION['NOMBRE']=$usuario;
  header("location: contenido.php");

}

else {
  echo '<script language="javascript">alert("usuario o password invalido");</script>'; 
  header("location: login.php");
}
?>

