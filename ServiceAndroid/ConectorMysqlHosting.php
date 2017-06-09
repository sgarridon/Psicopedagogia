<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "psicopedagogia";

$conexion = @mysql_connect($host, $user, $pass); 

if (!$conexion) {     
	die('<strong>No pudo conectarse:</strong> ' . mysql_error()); 
}else{ 

	 } 

mysql_select_db($db, $conexion) or die(mysql_error($conexion));   


date_default_timezone_set('Chile/Continental');
setlocale(LC_TIME, 'spanish');

?>