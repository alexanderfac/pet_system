<?php



//Variables de conexion a la base de datos 
$host='localhost'; // Nombre del host  
$username='root'; // usuarioMysql  
$password="alex"; // password Mysql  
$db_name='pet_system'; // Nombre de la BD 

// reakizando la coneccion haciendo uso de las variables antes creadas
$bd = mysql_connect("$host","$username","$password") or die("cannot connect"); //En caso de error 

mysql_select_db("pet_system", $bd); 
$result = mysql_query("SELECT * FROM `pet_system`.`mascotas`", $bd); 
// traigo del formulario los datos de la mascota y las almaceno en variables para luego enviarlas a la base de datos
$nombrem = $_POST['nombrem'];
$tipo = $_POST['tipo'];
$raza = $_POST['raza'];
$fecha = $_POST['fecha'];
//ruta de la imagen y pasos para guardar la imagen 
$foto =$_FILES['imag']['name'];
$ruta=$_FILES['imag']['tmp_name'];
$destino = "imagenes/".$foto;
copy($ruta,$destino);

$sql = mysql_query("SELECT * FROM usuario");//traigo el id de usuario de la base de datos y lo guardo en una variable
while($consulta=mysql_fetch_array($sql)){
  $idcode=$consulta['idusuario'];
}


  
$sql = "INSERT INTO `pet_system`.`mascotas` ( `nombrem`, `tipo`, `raza`, `fnacimiento`, `foto`, `usuario_idusuario`) VALUES ( '$nombrem', '$tipo', '$raza', '$fecha', '$destino','$idcode');";
  $a = mysql_query($sql);//inserto los datos de la mascota en la base de datos  
if($a!=""){
  
   $_SESSION['mascota']=$destino;  //guardo en variables de sesion
  header("location: mascota.php");//si el registro se realiza muestro al usuario lo que ingreeso abriendo una nueva ventana en su sesion
  
}
?>