<?php

/**
* 
*/

class mUsuario extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function AgregarUsuario($Registro)
	{
		$atributos = array(
			'at_NumRut'   		=> $Registro['regNumRut'],
			'at_DigRut'    		=> $Registro['regDigRut'],
			'at_NombrePri' 		=> $Registro['regNombre1'],
			'at_NombreSeg' 		=> $Registro['regNombre2'],
			'at_ApellidoPat'   	=> $Registro['regApellido1'],
			'at_ApellidoMat'   	=> $Registro['regApellido2'],
			'at_FechaNac' 		=> $Registro['regFechaNac'],
			'at_Email'    		=> $Registro['regEmail'],
			'at_Password' 		=> $Registro['regPassword'],
			'at_CodTipoUsuario'	=> $Registro['regCodTipoUsuario'],
			);
		
		$this->db->insert('usuarios',$atributos);
	}
	
	public function BuscarUsuario($var_email,$var_clave)
	{
		$query = $this->db->select("at_password");
		$query = $this->db->where("at_email",$var_email);
		$query = $this->db->get("usuarios");
		if($query->num_rows() > 0 ) {
			return $query->result_array();
		} else {
		    return "";
		}

	}
	
	public function mConsultarUsuarios()
	{
		$query = $this->db->select("usuarios.at_numrut,
									usuarios.at_nombrepri,
									usuarios.at_apellidopat,
									usuarios.at_apellidomat,
									DATE_FORMAT(usuarios.at_fechanac, '%d %M, %Y') as at_fechanac,
				                    usuarios.at_email,
				                    tipousuarios.at_descritipousuario
				                   ");
		$query = $this->db->join("tipousuarios", "usuarios.at_codtipousuario = tipousuarios.at_codtipousuario");
		$query = $this->db->order_by('usuarios.at_apellidopat, usuarios.at_apellidomat, usuarios.at_nombrepri');
		$query = $this->db->get("usuarios");
		return $query->result();
	}
}