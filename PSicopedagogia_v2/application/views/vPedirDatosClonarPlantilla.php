<!DOCTYPE html>
<html>
	<head>
		<title>
		</title>
		
		<?php $this->load->view("Header.php");?>
	</head>
	
	<body>
	  	<?php $this->load->view("BarraNavegacion.php");
	  	
	  	foreach($detplantilla as $fila)
	  	{
	  		$idPlantilla     = $fila->at_id_plantilla;
	  		$TipoActividad   = $fila->at_id_tipoactividad;
	  		$NomActividad    = $fila->at_nombreactividad;
	  		$DescriActividad = $fila->at_descriplantilla; 		
	  	}
	  	
	  	?>
	  	  
	  	<div class="container"> 	
	  	  		<div class="panel panel-default">
				  	  <div class="panel-heading">
				  		<h2 align="center">Clonar Plantilla para un Estudiante</h2>
				  	  </div>
				  	  
				  	  <div class="panel-body">  				  	  
				  	  		<form class="form-horizontal" role="form" action="fun_AgregarActividad" method="POST" enctype="multipart/form-data">
				  	  			<fieldset>		
									  <div class="form-group">
									    <label class="col-sm-3 control-label">ID de la Plantilla</label>
									    <div class="col-sm-3">
									      <input type="text" class="form-control" name="inp_id" id="inp_id" value="<?php echo $idPlantilla;?>" readonly/>
									    </div>
									  </div>
									  
									  <div class="form-group">
									    <label class="col-sm-3 control-label">Tipo de Actividad</label>
									    <div class="col-sm-3">
									      <input type="hidden" name="inp_TipoActividad" id="inp_TipoActividad" value="<?php echo $TipoActividad;?>">	
									      <input type="text" class="form-control" name="inp_Nomtipoactividad" id="id_Nomtipoactividad" value="<?php echo $NomActividad;?>" readonly/>	      
									    </div>
									  </div>

									  <div class="form-group">
									    <label class="col-sm-3 control-label">Descripción</label>
									    <div class="col-sm-6">
									      <input type="text" class="form-control" name="inp_Descripcion" id="id_Descripcion" value="<?php echo $DescriActividad;?>" readonly/>
									    </div>
									  </div>
									  									  				  	  										  
									  <div class="form-group">
									    <label class="col-sm-3 control-label">Rut Estudiante (sin dígito)</label>
									    <div class="col-sm-2">
									      <input type="text" class="form-control" name="inp_Rut" id="id_Rut" placeholder="111111111">
									    </div>
									  </div>
	
									  <div class="form-group">
									  	<label class="col-sm-3 control-label">Fecha inicio actividad</label>
                  						<div class='col-sm-2 input-group date' id='divMiCalendario'>
                      						<input type='text' name="inp_FechaInicio" id="inp_FechaInicio" class="form-control"  />
                      						<span class="input-group-addon">
                      							<span class="glyphicon glyphicon-calendar"></span>
                      						</span>
                  						</div>
									  </div>

									  <div class="form-group">
									  	<label class="col-sm-3 control-label">Fecha finalización actividad</label>
                  						<div class='col-sm-2 input-group date' id='divMiCalendario'>
                      						<input type='text' name="inp_FechaTermino" id="inp_FechaTermino" class="form-control"  />
                      						<span class="input-group-addon">
                      							<span class="glyphicon glyphicon-calendar"></span>
                      						</span>
                  						</div>
									  </div>
									  									  					  
									  <div class="col-md-12">
									      <input class="btn btn-md btn-primary" type="submit" value="Clonar">									      				
									  </div>								  								
								</fieldset> 
							</form>
					  </div>
				</div>
		</div>

	   <script type="text/javascript">
	     $('#divMiCalendario').datetimepicker({
	          format: 'YYYY-MM-DD HH:mm'       
	      });
	      $('#divMiCalendario').data("DateTimePicker").show();
	   </script>		
		
	</body>
</html>