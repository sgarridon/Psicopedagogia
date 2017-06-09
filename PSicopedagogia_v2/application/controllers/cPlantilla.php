<?php
/*
 * 
 */

class cPlantilla extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mPlantilla');
		$this->load->model('mActividadesEstudiante');
	}
	
	public function index()
	{
		$datos['plantillas'] = $this->mPlantilla->mConsultarPlantillas();
		$this->load->view('vGrillaPlantillas',$datos);
	}

	public function agregar_plantilla()
	{
		$this->load->view('vAgregarPlantilla');
	}
	
	public function AgregarPlantilla()
	{
		$grabar = true;
		
		if ($this->input->post('inp_Descripcion') == '')
		{
			$grabar = false;
		}
		if (($_FILES["fileImg1"]["name"] == '') &&
			($_FILES["fileImg2"]["name"] == '') &&
			($_FILES["fileImg3"]["name"] == '') &&
			($_FILES["fileImg4"]["name"] == '') &&
			($_FILES["fileImg5"]["name"] == '') )
			{
				$grabar = false;
			}
			
		if ($_FILES["fileImg1"]["name"] <> '') 
		{	
			if ( (($_FILES["fileImg1"]["type"] == "image/gif") || ($_FILES["fileImg1"]["type"] == "image/jpeg") || ($_FILES["fileImg1"]["type"] == "image/pjpeg")) &&
			     ($_FILES["fileImg1"]["size"] < 20000)
			   )
			{
				if ($_FILES["fileImg1"]["error"] > 0)
				{
					echo "Return Code: " . $_FILES["fileImg1"]["error"] . "<br />";
					$grabar = false;
				}
				else
				{
					if (file_exists(base_url()+"img/" . $_FILES["fileImg1"]["name"]))
					{
						echo $_FILES["fileImg1"]["name"] . " already exists. ";
						$grabar = false;
					}
				}
			}	
		}
		
		if ($_FILES["fileImg2"]["name"] <> '')
		{
			if ( (($_FILES["fileImg2"]["type"] == "image/gif") || ($_FILES["fileImg2"]["type"] == "image/jpeg") || ($_FILES["fileImg2"]["type"] == "image/pjpeg")) &&
				 ($_FILES["fileImg2"]["size"] < 20000)
				)
			{
				if ($_FILES["fileImg2"]["error"] > 0)
				{
					echo "Return Code: " . $_FILES["fileImg2"]["error"] . "<br />";
					$grabar = false;
				}
				else
				{
					if (file_exists(base_url()+"img/" . $_FILES["fileImg2"]["name"]))
					{
						echo $_FILES["fileImg2"]["name"] . " already exists. ";
						$grabar = false;
					}
				}
			}
		}

		if ($_FILES["fileImg3"]["name"] <> '')
		{
			if ( (($_FILES["fileImg3"]["type"] == "image/gif") || ($_FILES["fileImg3"]["type"] == "image/jpeg") || ($_FILES["fileImg3"]["type"] == "image/pjpeg")) &&
			     ($_FILES["fileImg3"]["size"] < 20000)
				)
			{
				if ($_FILES["fileImg3"]["error"] > 0)
				{
					echo "Return Code: " . $_FILES["fileImg3"]["error"] . "<br />";
					$grabar = false;
				}
				else
				{
					if (file_exists(base_url()+"img/" . $_FILES["fileImg3"]["name"]))
					{
						echo $_FILES["fileImg3"]["name"] . " already exists. ";
						$grabar = false;
					}
				}
			}
		}
		
		if ($_FILES["fileImg4"]["name"] <> '')
		{
			if ( (($_FILES["fileImg4"]["type"] == "image/gif") || ($_FILES["fileImg4"]["type"] == "image/jpeg") || ($_FILES["fileImg4"]["type"] == "image/pjpeg")) &&
					($_FILES["fileImg4"]["size"] < 20000)
					)
			{
				if ($_FILES["fileImg4"]["error"] > 0)
				{
					echo "Return Code: " . $_FILES["fileImg4"]["error"] . "<br />";
					$grabar = false;
				}
				else
				{
					if (file_exists(base_url()+"img/" . $_FILES["fileImg4"]["name"]))
					{
						echo $_FILES["fileImg4"]["name"] . " already exists. ";
						$grabar = false;
					}
				}
			}
		}

		if ($_FILES["fileImg5"]["name"] <> '')
		{
			if ( (($_FILES["fileImg5"]["type"] == "image/gif") || ($_FILES["fileImg5"]["type"] == "image/jpeg") || ($_FILES["fileImg5"]["type"] == "image/pjpeg")) &&
					($_FILES["fileImg5"]["size"] < 20000)
					)
			{
				if ($_FILES["fileImg5"]["error"] > 0)
				{
					echo "Return Code: " . $_FILES["fileImg5"]["error"] . "<br />";
					$grabar = false;
				}
				else
				{
					if (file_exists(base_url()+"img/" . $_FILES["fileImg5"]["name"]))
					{
						echo $_FILES["fileImg5"]["name"] . " already exists. ";
						$grabar = false;
					}
				}
			}
		}
		
		if ($grabar)
		{
			echo $this->input->post('inp_TipoActividad');
			$RegEnca['regTipoActividad']  = $this->input->post('inp_TipoActividad');
			$RegEnca['regDescripcion']    = $this->input->post('inp_Descripcion');
			$idPlantilla = $this->mPlantilla->mGuardarEncaPlantilla($RegEnca);
			
			if (($this->input->post('inp_Respuesta1') <> '') && ($this->input->post('inp_Puntos1') <> '') && ($_FILES["fileImg1"]["name"]<>'')) 
			{
				$RegDeta['regIdPlantilla']   = $idPlantilla;
				$RegDeta['regRespuesta']     = strtoupper($this->input->post('inp_Respuesta1'));
				$RegDeta['regPuntos']        = $this->input->post('inp_Puntos1');
				$RegDeta['regImgActividad']  = $_FILES["fileImg1"]["name"];
				$this->mPlantilla->mGuardarDetaPlantilla($RegDeta);
				
				move_uploaded_file($_FILES["fileImg1"]["tmp_name"],"img/" . $_FILES["fileImg1"]["name"]);
			}
			
			if (($this->input->post('inp_Respuesta2') <> '') && ($this->input->post('inp_Puntos2') <> '') && ($_FILES["fileImg2"]["name"]<>'')) 
			{
				$RegDeta['regIdPlantilla']   = $idPlantilla;
				$RegDeta['regRespuesta']     = strtoupper($this->input->post('inp_Respuesta2'));
				$RegDeta['regPuntos']        = $this->input->post('inp_Puntos2');
				$RegDeta['regImgActividad']  = $_FILES["fileImg2"]["name"];
				$this->mPlantilla->mGuardarDetaPlantilla($RegDeta);
				move_uploaded_file($_FILES["fileImg2"]["tmp_name"],"img/" . $_FILES["fileImg2"]["name"]);
			}
			
			if (($this->input->post('inp_Respuesta3') <> '') && ($this->input->post('inp_Puntos3') <> '') && ($_FILES["fileImg3"]["name"]<>''))
			{
				$RegDeta['regIdPlantilla']   = $idPlantilla;
				$RegDeta['regRespuesta']     = strtoupper($this->input->post('inp_Respuesta3'));
				$RegDeta['regPuntos']        = $this->input->post('inp_Puntos3');
				$RegDeta['regImgActividad']  = $_FILES["fileImg3"]["name"];
				$this->mPlantilla->mGuardarDetaPlantilla($RegDeta);
				move_uploaded_file($_FILES["fileImg3"]["tmp_name"],"img/" . $_FILES["fileImg3"]["name"]);
			}

			if (($this->input->post('inp_Respuesta4') <> '') && ($this->input->post('inp_Puntos4') <> '') && ($_FILES["fileImg4"]["name"]<>''))
			{
				$RegDeta['regIdPlantilla']   = $idPlantilla;
				$RegDeta['regRespuesta']     = strtoupper($this->input->post('inp_Respuesta4'));
				$RegDeta['regPuntos']        = $this->input->post('inp_Puntos4');
				$RegDeta['regImgActividad']  = $_FILES["fileImg4"]["name"];
				$this->mPlantilla->mGuardarDetaPlantilla($RegDeta);
				move_uploaded_file($_FILES["fileImg4"]["tmp_name"],"img/" . $_FILES["fileImg4"]["name"]);
			}

			if (($this->input->post('inp_Respuesta4') <> '') && ($this->input->post('inp_Puntos4') <> '') && ($_FILES["fileImg4"]["name"]<>''))
			{
				$RegDeta['regIdPlantilla']   = $idPlantilla;
				$RegDeta['regRespuesta']     = strtoupper($this->input->post('inp_Respuesta5'));
				$RegDeta['regPuntos']        = $this->input->post('inp_Puntos5');
				$RegDeta['regImgActividad']  = $_FILES["fileImg5"]["name"];
				$this->mPlantilla->mGuardarDetaPlantilla($RegDeta);
				move_uploaded_file($_FILES["fileImg5"]["tmp_name"],"img/" . $_FILES["fileImg5"]["name"]);
			}
				
			echo $this->input->post('inp_TipoActividad');
		}
		else
		{
			echo "Problema en los datos al grabar";
		}
		redirect(base_url("cPlantilla"));
	}
	
	public function fun_verImagenes()
	{
		$id_plant = $this->input->post('inp_id');
		$datosreg['detplantilla'] = $this->mPlantilla->mVerImgPlantilla($id_plant);
		$this->load->view('vImagenesPlantilla',$datosreg);
	}

	public function fun_DatosClonarPlantilla()
	{
		$id_plant = $this->input->post('inp_id');
		$datosreg['detplantilla'] = $this->mPlantilla->mVerImgPlantilla($id_plant);
		$this->load->view('vPedirDatosClonarPlantilla',$datosreg);
	}

	public function fun_AgregarActividad()
	{
		$RegEnca['regTipAct']  = $this->input->post('inp_TipoActividad');
		$RegEnca['regNumrut']  = $this->input->post('inp_Rut');
		$RegEnca['regFecini']  = $this->input->post('inp_FechaInicio');
		$RegEnca['regFecter']  = $this->input->post('inp_FechaTermino');
		$RegEnca['regDescri']  = $this->input->post('inp_Descripcion');
						
		$this->mActividadesEstudiante->mGuardarActividad($RegEnca,$this->input->post('inp_id'));

/*		move_uploaded_file($_FILES["fileImg"]["tmp_name"],"img/" . $_FILES["fileImg"]["name"]);
		echo $this->input->post('inp_TipoActividad'); */
		redirect(base_url("cPlantilla"));
	}
	
	
	//FUNCIÓN PARA SUBIR LA IMAGEN Y VALIDAR EL TÍTULO
	function do_upload() {
		$this->form_validation->set_rules('titulo', 'titulo', 'required|min_length[5]|max_length[10]|trim|xss_clean');
		$this->form_validation->set_message('required', 'El campo no puede ir vacío!');
		$this->form_validation->set_message('min_length', 'El campo debe tener al menos %s carácteres');
		$this->form_validation->set_message('max_length', 'El campo no puede tener más de %s carácteres');
		//SI EL FORMULARIO PASA LA VALIDACIÓN HACEMOS TODO LO QUE SIGUE
		if ($this->form_validation->run() == TRUE)
		{
			$config['upload_path']   = base_url()+'/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']      = '2000';
			$config['max_width']     = '2024';
			$config['max_height']    = '2008';
	
			$this->load->library('upload', $config);
			//SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
			if (!$this->upload->do_upload()) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('upload_view', $error);
			} else {
				//EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS
				//ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
				$file_info = $this->upload->data();
				//USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
				//ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
				$this->_create_thumbnail($file_info['file_name']);
				$data = array('upload_data' => $this->upload->data());
				$titulo = $this->input->post('titulo');
				$imagen = $file_info['file_name'];
				$subir = $this->upload_model->subir($titulo,$imagen);
				$data['titulo'] = $titulo;
				$data['imagen'] = $imagen;
				$this->load->view('imagen_subida_view', $data);
			}
		}else{
			//SI EL FORMULARIO NO SE VÁLIDA LO MOSTRAMOS DE NUEVO CON LOS ERRORES
			$this->index();
		}
	}
	
}