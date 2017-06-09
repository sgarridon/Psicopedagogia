<!DOCTYPE HTML>
<html>
	<head>
		<title></title>

		<?php $this->load->view("Header.php");?>
		
		<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>" />	 
		

	</head>
 
  	<body>    
  		<?php $this->load->view("BarraNavegacion.php");?>
  		
  		<div>
  			<h1 align="center">Gestor de Usuarios</h1>
  		</div>
  		
		<div class="panel-body">
		   	<form accept-charset="UTF-8" role="form" action="cUsuarios/pedir_datos_usuario" method="POST">
                 <fieldset>
			   		<input class="btn btn-md btn-primary" type="submit" value="Agregar nuevo Usuario">
			   	</fieldset>
		    </form>
		</div>  		
		
  		<div>
	 		<table class="table table-hover table-bordered">
			    <thead class="thead-inverse">
			        <tr>
			        	<th align="center">Apellido paterno</th>
			            <th align="center">Apellido materno</th>
			            <th align="center">Nombre</th>
			            <th align="center">Email</th>
			            <th align="center">Tipo de usuario</th>
			            <th align="center">Acciones</th>
			        </tr>
			    </thead>
			    <tbody>		    
		            <?php
		            foreach($usuarios as $fila)
		            {
		            ?>
		            <tr>
		            		<td align="left"><?=$fila->at_apellidopat?></td>
				            <td align="left"><?=$fila->at_apellidomat?></td>
				            <td align="center"><?=$fila->at_nombrepri?></td>
				            <td align="center"><?=$fila->at_email?></td>
				            <td align="center"><?=$fila->at_descritipousuario?></td>
				            <td align="center"><p>
				            	<a data-toggle="modal" href="#editusu" class="btn btn-primary btn-large" id="<?=$fila->at_numrut?>">Editar</a> 
				            </p></td>
		            </tr>
		            <?php
		            }
		            ?>			     
			    </tbody>
			</table>
    	</div>
    	
		<div id="editusu" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
				    <div class="modal-header">
				        <a data-dismiss="modal" class="close">×</a>
				        <h3>Editar Usuario</h3>
		    	    </div>
					<div class="modal-body">
		                <form role="form">
		                    <div class="form-group">
		                        <label for="inputName">Rut</label>
	                        	<input type="text" class="form-control" id="inp_Rut" placeholder="11111111-1"/>
		                    </div>
		                    <div class="form-group">
		                        <label for="inputName">Primer nombre</label>
	                        	<input type="text" class="form-control" id="inp_Nombre1" placeholder="Primer nombre"/>
		                    </div>
		                    <div class="form-group">
		                        <label for="inputName">Segundo nombre</label>
	                        	<input type="text" class="form-control" id="inp_Nombre2" placeholder="Segundo nombre"/>
		                    </div>
		                    <div class="form-group">
		                        <label for="inputName">Apellido paterno</label>
	                        	<input type="text" class="form-control" id="inp_ApellidoPat" placeholder="Apellido paterno"/>
		                    </div>
		                    <div class="form-group">
		                        <label for="inputName">Apellido materno</label>
	                        	<input type="text" class="form-control" id="inp_ApellidoMat" placeholder="Apellido materno"/>
		                    </div>
		                    <div class="form-group">
		                        <label for="inputEmail">Email</label>
		                        <input type="email" class="form-control" id="inp_Email" placeholder="Email"/>
		                    </div>
		                    <div class="form-group" id='divMiCalendario'>
		                        <label for="inputEmail">Fecha nacimiento</label>
                      			<input type='text' id="txtFecha" class="form-control"  readonly/>
                      			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                      		</div>			                    
		                    <div class="form-group">
		                        <label for="inputEmail">Clave</label>
		                        <input type="email" class="form-control" id="inp_Clave1" placeholder="Clave"/>
		                    </div>
		                    <div class="form-group">
		                        <label for="inputEmail">Repetir clave</label>
		                        <input type="email" class="form-control" id="inp_Clave2" placeholder="Repetir clave"/>
		                    </div>
							<div class="form-group">
							      <center><button type="submit" class="btn btn-primary">Guardar</button></center>
							</div>			                    		                    		                    
		                </form>
<!-- 					
				          <form role="form">
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
									    <label class="col-sm-3 control-label">Nombres</label>
									    <div class="col-sm-3">
									      <input type="text" class="form-control" name="inp_nombre1" id="id_nombre1" placeholder="Primer nombre">
									    </div>
									    <div class="col-sm-3">  
									      <input type="text" class="form-control" name="inp_nombre2" id="id_nombre2" placeholder="Segundo nombre">
									    </div>
									  </div>

									  <div class="form-group">
									    <label class="col-sm-3 control-label">Apellidos</label>
									    <div class="col-sm-3">
									      <input type="text" class="form-control" name="inp_apellidopat" id="id_apellidopat" placeholder="Apellido paterno">
									    </div>
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
								</fieldset> 
				            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
				          </form>			-->	   
					</div>
					<div class="modal-footer">
<!-- 					   <a href="index.html" class="btn btn-success">Guardar</a> -->
			   	       <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
				    </div>
				</div>
  			</div> 				
  		</div>

	    <script type="text/javascript">
		     $('#divMiCalendario').datetimepicker({
		          format: 'YYYY-MM-DD HH:mm'       
		      });
		      $('#divMiCalendario').data("DateTimePicker").show();
	    </script>	
	      	
        <script src="bootstrap-modal.js"></script>
        
    	<?php $this->load->view("FooterBootstrap.php");?>  
  	</body>
</html>