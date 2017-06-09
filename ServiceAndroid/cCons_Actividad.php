<?php 

include ('ConectorMysqlHosting.php');

$param_rut     = $_GET['param_rut'];
$param_tipoact = $_GET['param_tipo_act'];

if($param_rut!=""){
	$sql = "SELECT `detalleactividad`.at_id_actividad,
	                at_descripcion,
					at_numrut,
					at_respuestacorrecta,
					at_puntosrespuesta,
					at_rutaimagen,
					at_id_detalleactividad,
					at_estado
					FROM `detalleactividad`
					inner join `encabezadoactividad` on `detalleactividad`.at_id_actividad = `encabezadoactividad`.at_id_actividad
					where (at_numrut = '$param_rut') and (at_id_tipoactividad = '$param_tipoact')";

	$con = mysqli_connect($host,$user,$pass,$db);
	$result= mysqli_query($con,$sql);
	$response = array();
	while($row = mysqli_fetch_array($result))
	{
		array_push($response, array("id_actividad"=>$row[0],
                                    "descriactividad"=>$row[1],		
		                            "numrut"=>$row[2], 
									"respuestacorr"=>$row[3], 
									"puntosrespuesta"=>$row[4], 
									"rutaimg"=>$row[5],
								    "id_detalleactividad"=>$row[6],
								    "estadoact"=>$row[7]));
	}

	echo json_encode(array("server_response"=>$response));
	mysqli_close($con);
}
?>