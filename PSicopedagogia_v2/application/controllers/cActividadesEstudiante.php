<?php

/**
 *
*/

class cActividadesEstudiante extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mActividadesEstudiante');
	}

	public function index()
	{
		$datos['actividades'] = $this->mActividadesEstudiante->mConsultarActividades();
		$this->load->view('vGrillaActividades',$datos);
/*		$this->load->view('vActividadesEstudiante'); */
	}

	public function fun_verActividad()
	{
		$id_act = $this->input->post('inp_id');
		$datosreg['detactividad'] = $this->mActividadesEstudiante->mVerActividadesEstudiante($id_act);
		$this->load->view('vDetalleActividad',$datosreg);
	}
	
	
	
	
	public function AgregarActividad()
	{
		
	}
	
	public function ExtraerActividad()
	{
		
//		$sql = "SELECT * FROM `ubi_driv`";
//		$con = mysqli_connect($host,$user,$pass,$db);
//		$result= mysqli_query($con,$sql);

		$result = $this->db->get('encabezadoactividad');

		$response = array();
		while($row = $result->result())
		{
			array_push($response, array("id_actividad"=>$row[0], "id_tipoactividad"=>$row[1], "descripcion"=>$row[2]));
		
		}
		
		echo json_encode(array("server_response"=>$response));
//		mysqli_close($con);
	}
	
}