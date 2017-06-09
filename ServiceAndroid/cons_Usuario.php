<?php 

include ('ConectorMysqlHosting.php');

$param_email=$_GET['param_email'];

if($param_email!=""){
	
	$sql = "SELECT at_numrut,
	               at_digrut,
				   at_nombrepri,
				   at_apellidopat,
				   at_password,
				   at_codtipousuario
				   FROM `usuarios`
     			   where at_email = '$param_email'";

	$con = mysqli_connect($host,$user,$pass,$db);
	$result= mysqli_query($con,$sql);
	$response = array();
	while($row = mysqli_fetch_array($result))
	{
		array_push($response, array("js_numrut"=>$row[0],
                                    "js_digrut"=>$row[1],		
		                            "js_nombrepri"=>$row[2], 
									"js_apellidopat"=>$row[3], 
									"js_password"=>$row[4], 
									"js_codtipousuario"=>$row[5]));
	}

	echo json_encode(array("server_response"=>$response));
	mysqli_close($con);
}
?>