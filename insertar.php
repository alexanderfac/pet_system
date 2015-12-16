<?php


//Variables de conexion a la base de datos 
$host='localhost'; // Nombre del host  
$username='root'; // usuarioMysql  
$password="alex"; // password Mysql  
$db_name='pet_system'; // Nombre de la BD 


$bd = mysql_connect("$host","$username","$password") or die("cannot connect"); //En caso de error 

mysql_select_db("pet_system", $bd); 
$result = mysql_query("SELECT * FROM usuario", $bd); 

//print_r($result);

//echo mysql_result($result, 0, "nacimiento");
$nombre= $_POST['nombre'];
$email=$_POST['email'];
$password = $_POST['password'];

  
$sql = "insert into usuario (nombre,correo,contrasena) values ('$nombre','$email','$password');"; // inserto los datos de registro de usuario a la base de datos
 $a = mysql_query($sql);
if ($a==1){
  header("location: login.php");//si el registro en la base de datos es exitoso

}
else header("location: registro.php");// en caso de fallar el registro

?>