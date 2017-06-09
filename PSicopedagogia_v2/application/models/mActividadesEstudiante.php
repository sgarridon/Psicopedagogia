<?php

/**
 *
*/

class mActividadesEstudiante extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function mConsultarActividades()
	{
		$query = $this->db->select("encabezadoactividad.at_id_actividad,
									DATE_FORMAT(encabezadoactividad.at_fechainicio, '%d %M, %Y') as at_fechainicio,
									DATE_FORMAT(encabezadoactividad.at_fechatermino, '%d %M, %Y') as at_fechatermino,
				                    encabezadoactividad.at_descripcion,
									tipoactividad.at_nombreactividad,
									usuarios.at_nombrePri,
									usuarios.at_apellidopat,
									usuarios.at_apellidomat,
				                   ");
		$query = $this->db->join("usuarios", "encabezadoactividad.at_numrut = usuarios.at_numrut");
		$query = $this->db->join("tipoactividad", "encabezadoactividad.at_id_tipoactividad = tipoactividad.at_id_tipoactividad");
		$query = $this->db->order_by('usuarios.at_apellidopat, usuarios.at_apellidomat,usuarios.at_nombrePri,encabezadoactividad.at_fechainicio');
		$query = $this->db->get("encabezadoactividad");
		return $query->result();
	}

	public function mVerActividadesEstudiante($id_reg)
	{
		$query = $this->db->select("encabezadoactividad.at_id_actividad,
									encabezadoactividad.at_id_tipoactividad,
				                    encabezadoactividad.at_descripcion,
				                    detalleactividad.at_respuestacorrecta,
				                    detalleactividad.at_puntosrespuesta,
									detalleactividad.at_puntosobtenidos,
									case when detalleactividad.at_estado = 0 then 'No respondida aun' else 'Respondida' end as at_estado,
									detalleactividad.at_rutaimagen,
									tipoactividad.at_nombreactividad
				                   ");
		$query = $this->db->join("detalleactividad", "encabezadoactividad.at_id_actividad = detalleactividad.at_id_actividad");
		$query = $this->db->join("tipoactividad", "encabezadoactividad.at_id_tipoactividad = tipoactividad.at_id_tipoactividad");
		$query = $this->db->where("encabezadoactividad.at_id_actividad = ".$id_reg);
		$query = $this->db->get("encabezadoactividad");
		return $query->result();
	}
	
	public function mGuardarActividad($RegEnca,$idPlantilla)
	{
		/* Insertar encabezado de la actividad del estudiante*/
		$RegInsert1 = array(
				'at_id_TipoActividad'	=> $RegEnca['regTipAct'],
				'at_Numrut' 			=> $RegEnca['regNumrut'],
				'at_FechaInicio' 		=> date("Y-m-d", strtotime($RegEnca['regFecini'])),
				'at_FechaTermino' 		=> date("Y-m-d", strtotime($RegEnca['regFecter'])),
				'at_Descripcion' 		=> $RegEnca['regDescri'],
		);
	
		$this->db->insert('encabezadoactividad',$RegInsert1);
	
		/* obtener el id de la acividad insertada */
		$query = $this->db->select_max("at_id_actividad");
		$query = $this->db->get("encabezadoactividad");
		$reg   = $query->row();
	
		/* obtener el detalle de la plantilla*/
	
		$query2 = $this->db->select("detalleplantilla.at_respuestacorrecta,
				                     detalleplantilla.at_puntosrespuesta,
									 detalleplantilla.at_rutaimagen
				                    ");
		$query2 = $this->db->where("detalleplantilla.at_id_plantilla = ".$idPlantilla);
		$query2 = $this->db->order_by('detalleplantilla.at_id_plantilla');
		$query2 = $this->db->get("detalleplantilla");
		$result = $query2->result();
	
		foreach($result as $fila)
		{
			/* insertar el detalle de la actividad desde el detalle de la plantilla*/
			$RegInsert2 = array(
					'at_id_actividad'           => $reg->at_id_actividad,
					'at_respuestacorrecta'  	=> $fila->at_respuestacorrecta,
					'at_puntosrespuesta' 		=> $fila->at_puntosrespuesta,
					'at_rutaimagen'   			=> $fila->at_rutaimagen,
			);
	
			$this->db->insert('detalleactividad',$RegInsert2);
		}
	}
	
	
	public function AgregarActividad($Registro)
	{

	}
	
	public function GetActividad()
	{
		$query = $this->db->get("encabezadoactividad");
		$reg = $query->row();
		
	}

}