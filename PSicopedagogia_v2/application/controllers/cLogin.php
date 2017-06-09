<?php
/**
 *
 */

class cLogin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mUsuario');
	}

	public function index()
	{
		$this->load->view('vLogin');

	}
	
	public function fun_ValidarUsuario()
	{
		$datos = $this->mUsuario->BuscarUsuario($this->input->post('input_email'),$this->input->post('input_password'));
		if ($datos<>"") {
			if ($datos[0]['at_password'] == $this->input->post('input_password')) {
				$this->load->view('vMenuInicio');
			} else {
				printf("<script type='text/javascript'>alert('Usuario y/o clave incorrecta'); </script>");
				redirect(base_url());
			}
		} else {
			printf("<script type='text/javascript'>alert('Usuario no existe'); </script>");
			redirect(base_url());
		}
	}
}