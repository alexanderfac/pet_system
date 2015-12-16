<?php include "valida_session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mis mascotas</title>
  <meta charset="UTF-8">
		<title>BIENVENIDO</title>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
  <?php include "nav1.php"; ?>
  
  
  
    <div class="row">
        <div class="col s12 m7 l12">
          <div class="card">
            <div class="card-image">
              <?php
              
              $host='localhost'; // Nombre del host  
$username='root'; // usuarioMysql  
$password="alex"; // password Mysql  
$db_name='pet_system'; // Nombre de la BD 


$bd = mysql_connect("$host","$username","$password") or die("cannot connect"); //En caso de error 

mysql_select_db("pet_system", $bd); 
$result = mysql_query("SELECT * FROM `pet_system`.`mascotas`", $bd); 
              
              
              $sql = mysql_query("SELECT * FROM `pet_system`.`mascotas`");
while($consulta=mysql_fetch_array($sql)){
  $idcode=$consulta['foto'];
  $nombre=$consulta['nombrem'];
}
              echo "<img class='re' src='".$idcode."'>";
              ?>
              <span class="card-title"><?php echo $nombre; ?></span>
            </div>
            <div>
              <p> ahora perteneces a pet system</p>
            </div>
            <div class="card-action">
              <a href="contenido.php">Tienes mas mascotas</a>
            </div>
          </div>
        </div>
      </div>
	<style>
	.re {
 max-width: 100%;
 height: auto;
}
	</style>
  
  
				<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
				<script type="text/javascript" src="materialize/js/materialize.min.js"></script>

	
</body>
</html>