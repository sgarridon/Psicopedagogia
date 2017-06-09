<?php 

include ('ConectorMysqlHosting.php');

$param_id_detalleact   = $_GET['param_id_detalleact'];
$param_puntosobtenidos = $_GET['param_puntosobtenidos'];

if($param_id_detalleact != ""){
	$act = "UPDATE detalleactividad SET 
	        at_puntosobtenidos='$param_puntosobtenidos',
	        at_estado = 1
	        WHERE at_id_detalleactividad = '$param_id_detalleact'";
	$eje = mysql_query($act);
}
?>