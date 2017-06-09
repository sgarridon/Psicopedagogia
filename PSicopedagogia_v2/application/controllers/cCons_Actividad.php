<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "psicopedagogia";

$sql = "SELECT at_id_actividad,at_respuestacorrecta,at_rutaimagen FROM `detalleactividad`";
$con = mysqli_connect($host,$user,$pass,$db);
$result= mysqli_query($con,$sql);
$response = array();
while($row = mysqli_fetch_array($result))
{
	array_push($response, array("id_actividad"=>$row[0], "respuestacorr"=>$row[1], "rutaimg"=>$row[2]));
}

echo json_encode(array("server_response"=>$response));
mysqli_close($con);

?>