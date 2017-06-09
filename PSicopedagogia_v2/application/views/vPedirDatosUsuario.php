<!DOCTYPE html>
<html>
	<head>
		<title>
		</title>
		
		<?php $this->load->view("Header.php");?>


	</head>
	
	<body>
	  	<?php $this->load->view("BarraNavegacion.php");?>
	  	  
	  	<div class="container"> 	
	  	  		<div class="panel panel-default">
				  	  <div class="panel-heading">
				  		<h2 align="center">Agregar un nuevo Usuario</h2>
				  	  </div>
				  	  
				  	  <div class="panel-body">  				  	  
				  	  		<form class="form-horizontal" role="form" action="<?php echo base_url("cUsuarios/GuardarUsuario"); ?>" method="POST" enctype="multipart/form-data">
				  	  			<fieldset>
 									  <div class="form-group"> 
 									      <label class="col-sm-3 control-label">Tipo de usuario</label>  
										  <div class="col-sm-2">
											  <select class="form-control" name="inp_TipoUsuario" id="id_TipoUsuario">
											    <option value="1">Administrador</option>
											    <option value="2">Estudiante</option>
											    <option value="3">Apoderado</option>
											    <option value="3">Profesor</option>
											  </select>
										 </div>			    
 									  </div> 
 									  
									  <div class="form-group">
									    <label class="col-sm-3 control-label">Rut</label>
									    <div class="col-sm-3">
									      <input type="text" class="form-control" name="inp_Rut" id="id_Rut" placeholder="111111111-1">
									    </div>
									  </div>
	
									  <div class="form-group">
									    <label class="col-sm-3 control-label">Primer nombre</label>
									    <div class="col-sm-3">
									      <input type="text" class="form-control" name="inp_nombre1" id="id_nombre1" placeholder="Primer nombre">
									    </div>
									  </div>

									  <div class="form-group">
									    <label class="col-sm-3 control-label">Segundo nombre</label>
									    <div class="col-sm-3">
									      <input type="text" class="form-control" name="inp_nombre2" id="id_nombre2" placeholder="Segundo nombre">
									    </div>
									  </div>

									  <div class="form-group">
									    <label class="col-sm-3 control-label">Apellido paterno</label>
									    <div class="col-sm-3">
									      <input type="text" class="form-control" name="inp_apellidopat" id="id_apellidopat" placeholder="Apellido paterno">
									    </div>
									  </div>

									  <div class="form-group">
									    <label class="col-sm-3 control-label">Apellido materno</label>
									    <div class="col-sm-3">
									      <input type="text" class="form-control" name="inp_apellidomat" id="id_apellidomat" placeholder="Apellido materno">
									    </div>
									  </div>

									  <div class="form-group">
									  	<label class="col-sm-3 control-label">Fecha de nacimiento</label>
                  						<div class='col-sm-3 input-group date' id='divMiCalendario'>
                      						<input type='text' id="txtFecha" class="form-control"  readonly/>
                      						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                      						</span>
                  						</div>
									  </div>
									  					  
									  <div class="form-group">
									    <label class="col-sm-3 control-label">Email</label>
									    <div class="col-sm-3">
									      <input type="email" class="form-control" name="inp_email" id="id_email" placeholder="email@algo.com">
									    </div>
									  </div>

									  <div class="form-group">
									    <label class="col-sm-3 control-label">Clave</label>
									    <div class="col-sm-3">
									      <input type="password" class="form-control" name="inp_clave1" id="id_clave1" placeholder="Clave">
									    </div>
									  </div>

									  <div class="form-group">
									    <label class="col-sm-3 control-label">Repetir Clave</label>
									    <div class="col-sm-3">
									      <input type="password" class="form-control" name="inp_clave2" id="id_clave2" placeholder="Repetir clave">
									    </div>
									  </div>	
									  								  
									  <div class="form-group">
									      <input class="btn btn-lg btn-success btn-block" type="submit" value="Ingresar">
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
