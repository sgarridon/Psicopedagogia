<?php 

include ('ConectorMysqlHosting.php');

$param_rut=$_GET['param_rut'];

if($param_rut!=""){

	$sql = "SELECT at_id_actividad,
	               at_id_tipoactividad,
				   at_numrut,
				   at_fechainicio,
				   at_fechatermino,
				   at_descripcion 
				   FROM `encabezadoactividad`
     			   where (at_numrut = '$param_rut' and at_fechatermino >= curdate())";

	$con      = mysqli_connect($host,$user,$pass,$db);
	
	$result   = mysqli_query($con,$sql);
	$response = array();

	while($row = mysqli_fetch_array($result))
	{

		array_push($response, array("js_idactividad"=>$row[0],
                                    "js_idtipoactividad"=>$row[1],		
		                            "js_numrut"=>$row[2], 
									"js_fechainicio"=>$row[3], 
									"js_fechatermino"=>$row[4], 
									"js_descriactividad"=>$row[5]));
	}

	echo json_encode(array("server_response"=>$response));
	mysqli_close($con);
}
?>