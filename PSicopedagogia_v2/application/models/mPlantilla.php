<?php
/**
 *
 */

class mPlantilla extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function mGuardarEncaPlantilla($RegEnca)
	{
		$RegInsert1 = array(
				'at_id_TipoActividad'	=> $RegEnca['regTipoActividad'],
				'at_DescriPlantilla' 	=> $RegEnca['regDescripcion'],
				'at_fechacreacion' 		=> date('Y-m-d'),
		);

		$this->db->insert('encabezadoplantilla',$RegInsert1);

		$query = $this->db->select_max("at_id_plantilla");
		$query = $this->db->get("encabezadoplantilla");
		$reg   = $query->row();
		return $reg->at_id_plantilla;
	}

	public function mGuardarDetaPlantilla($RegDeta)
	{
		if (($RegDeta['regRespuesta'] <> '') && ($RegDeta['regPuntos'] <> '') && ($RegDeta['regImgActividad'] <> ''))
		{
			$RegInsert2 = array(
					'at_id_plantilla'           => $RegDeta['regIdPlantilla'],
					'at_respuestacorrecta'  	=> $RegDeta['regRespuesta'],
					'at_puntosrespuesta' 		=> $RegDeta['regPuntos'],
					'at_rutaimagen'   			=> $RegDeta['regImgActividad'],
			);
			$this->db->insert('detalleplantilla',$RegInsert2);
		}
	
	}
	
	public function mConsultarPlantillas()
	{
		$query = $this->db->select("encabezadoplantilla.at_id_plantilla,
									DATE_FORMAT(encabezadoplantilla.at_fechacreacion, '%d %M, %Y') as at_fechacreacion,
				                    encabezadoplantilla.at_descriplantilla,
									tipoactividad.at_nombreactividad
				                   ");
		$query = $this->db->join("tipoactividad", "encabezadoplantilla.at_id_tipoactividad = tipoactividad.at_id_tipoactividad");
		$query = $this->db->order_by('encabezadoplantilla.at_id_tipoactividad ASC, encabezadoplantilla.at_fechacreacion ASC');
		$query = $this->db->get("encabezadoplantilla");
		return $query->result();
	}
	
	public function mVerImgPlantilla($id_reg)
	{
		$query = $this->db->select("encabezadoplantilla.at_id_plantilla,
									encabezadoplantilla.at_id_tipoactividad,
									DATE_FORMAT(encabezadoplantilla.at_fechacreacion, '%d %M, %Y') as at_fechacreacion,
				                    encabezadoplantilla.at_descriplantilla,
				                    detalleplantilla.at_respuestacorrecta,
				                    detalleplantilla.at_puntosrespuesta,
									detalleplantilla.at_rutaimagen,
									tipoactividad.at_nombreactividad
				                   ");
		$query = $this->db->join("detalleplantilla", "encabezadoplantilla.at_id_plantilla = detalleplantilla.at_id_plantilla");
		$query = $this->db->join("tipoactividad", "encabezadoplantilla.at_id_tipoactividad = tipoactividad.at_id_tipoactividad");
		$query = $this->db->where("encabezadoplantilla.at_id_plantilla = ".$id_reg);
		$query = $this->db->order_by('encabezadoplantilla.at_id_tipoactividad ASC, encabezadoplantilla.at_fechacreacion ASC');
		$query = $this->db->get("encabezadoplantilla");
		return $query->result();
	}

	public function mConsultarPlantillas_respaldo()
	{
		$query = $this->db->select("encabezadoplantilla.at_id_plantilla,
									DATE_FORMAT(encabezadoplantilla.at_fechacreacion, '%d %M, %Y') as at_fechacreacion,
				                    encabezadoplantilla.at_descriplantilla,
				                    detalleplantilla.at_respuestacorrecta,
				                    detalleplantilla.at_puntosrespuesta,
									tipoactividad.at_nombreactividad
				                   ");
		$query = $this->db->join("detalleplantilla", "encabezadoplantilla.at_id_plantilla = detalleplantilla.at_id_plantilla");
		$query = $this->db->join("tipoactividad", "encabezadoplantilla.at_id_tipoactividad = tipoactividad.at_id_tipoactividad");
		$query = $this->db->order_by('encabezadoplantilla.at_id_tipoactividad ASC, encabezadoplantilla.at_fechacreacion ASC');
		$query = $this->db->get("encabezadoplantilla");
		return $query->result();
	}
	
}