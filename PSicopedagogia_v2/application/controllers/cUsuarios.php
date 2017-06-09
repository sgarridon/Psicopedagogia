<?php

/**
* 
*/

class cUsuarios extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mUsuario');

	}

	public function index()
	{
		$datos['usuarios'] = $this->mUsuario->mConsultarUsuarios();
		$this->load->view('vGrillaUsuarios',$datos);
	}

	public function pedir_datos_usuario()
	{
		$this->load->view('vPedirDatosUsuario');	
	}
	
	public function GuardarUsuario()
	{
		
		echo $_POST['txtNumRut'];
		
		if ($this->input->post('txtNumRut') <> "")
			{
				$Registro['regNumRut']          = $this->input->post('txtNumRut');
				$Registro['regDigRut']          = $this->input->post('txtDigRut');
				$Registro['regNombre1']         = $this->input->post('txtNombre1');
				$Registro['regNombre2']         = $this->input->post('txtNombre2');
				$Registro['regApellido1']       = $this->input->post('txtApellido1');
				$Registro['regApellido2']       = $this->input->post('txtApellido2');
				$Registro['regEmail']           = $this->input->post('txtEmail');
				$Registro['regFechaNac']        = $this->input->post('datFecha');
				$Registro['regPassword']        = $this->input->post('txtPassword');
				$Registro['regCodTipoUsuario']  = $this->input->post('mnu_TipoUsuario');
				
				$this->mUsuario->AgregarUsuario($Registro);
			}
		else
			echo "Faltan datos. no grabado" ;
	}
	
}