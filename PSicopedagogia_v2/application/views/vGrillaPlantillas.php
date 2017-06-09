<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
	
		<?php $this->load->view("Header.php");?> 
		
		<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>" />	 

        <script type="text/javascript">
			{
				  $(document).ready(function()
							{
							    $("a").click(function()
									    {
											document.getElementById('idimg_plantilla').innerHTML = $(this).attr("id"); 	
							  			});
					 		});

			}

		</script>			
		
	</head>
 
  	<body>    
  		<?php $this->load->view("BarraNavegacion.php");?>
  		
  		<div>
  			<h1 align="center">Gestor de Plantillas</h1>
  		</div>
  		
		<div class="panel-body">
		   	<form accept-charset="UTF-8" role="form" action="cPlantilla/agregar_plantilla" method="POST">
                 <fieldset>
			   		<input class="btn btn-md btn-primary" type="submit" value="Agregar nueva Plantilla">
			   	</fieldset>
		    </form>
		</div>  		
		
  		<div>
	 		<table class="table table-hover table-bordered">
			    <thead class="thead-inverse">
			        <tr>
			        	<th align="center">ID plantilla</th>
			            <th align="center">Tipo de Actividad</th>
			            <th align="center">Fecha creación</th>
			            <th align="center">Descripción</th>
			            <th align="center">Detalle</th>
			        </tr>
			    </thead>
			    <tbody>		    
		            <?php
		            foreach($plantillas as $fila)
		            {
		            ?>
		            <tr>
		            		<td align="left"><?=$fila->at_id_plantilla?></td>
				            <td align="left"><?=$fila->at_nombreactividad?></td>
				            <td align="center"><?=$fila->at_fechacreacion?></td>
				            <td align="left"><?=$fila->at_descriplantilla?></td>
				            <td align="center"><p>
				                <form action="cPlantilla/fun_verImagenes" role="form" method="POST">
				                	<input type="hidden" name="inp_id" id="inp_id" value="<?php echo $fila->at_id_plantilla;?>">
				            		<input class="btn btn-md btn-primary" type="submit" value="Ver/Clonar"> 
				            	</form>
				            </p></td>
		            </tr>
		            <?php
		            }
		            ?>			     
			    </tbody>
			</table>
    	</div>
    	
		<div id="clonar" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
				    <div class="modal-header">
				        <a data-dismiss="modal" class="close">×</a>
				        <h3>Clonar Plantilla como una Actividad</h3>
		    	    </div>
					<div class="modal-body">
					
					
				          <form role="form">
				            <div class="form-group">
				              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
				              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
				            </div>
				            <div class="form-group">
				              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
				              <input type="text" class="form-control" id="psw" placeholder="Enter password">
				            </div>
				            <div class="checkbox">
				              <label><input type="checkbox" value="" checked>Remember me</label>
				            </div>
				            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
				          </form>				   
					   
					   
					                  
					</div>
					<div class="modal-footer">
					   <a href="index.html" class="btn btn-success">Guardar</a>
			   	       <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
				    </div>
				</div>
  			</div> 				
  		</div>

		<div id="verimg" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
				    <div class="modal-header">
				        <a data-dismiss="modal" class="close">×</a>
				        <h3>Imágenes de Plantilla</h3>
  				        <p id="idimg_plantilla"></p>
		    	    </div>
					<div class="modal-body">
					
				 		<table class="table table-hover table-bordered">
						    <thead class="thead-inverse">
						        <tr>
						            <th align="center">Respuesta esperada</th>
						            <th align="center">Puntos respuesta correcta</th>
						        </tr>
						    </thead>
						    <tbody>		    
					            <?php 
					            if (isset($ide)){
					            	echo $ide;
					            } else {
					            	echo "nada";
					            }
					            
					            
					            if(isset($_POST["id_php"])) 
					            {
					            	if($_POST["id_php"]) 
					            	{
						            	$id_plantilla2 = $_POST["id_php"];
						            	echo $id_plantilla2;
							            foreach($plantillas as $fila)
							            {
							            	if ($fila->at_id_plantilla == $id_plantilla2) 
							            	{
					            ?>
								            <tr>
										        <td align="center"><?=$fila->at_respuestacorrecta?></td>
										        <td align="center"><?=$fila->at_puntosrespuesta?></td>
								            </tr>
						            <?php
							            	}
							            }
					            	}
					            } else {
					            	echo "sin var post";
					            }
					            ?>			     
						    </tbody>
						</table>
						
										   				   					                  
					</div>
					<div class="modal-footer">
					   <a href="index.html" class="btn btn-success">Guardar</a>
			   	       <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
				    </div>
				</div>
  			</div> 				
  		</div>
   	
        <script src="bootstrap-modal.js"></script>

        
    	<?php $this->load->view("FooterBootstrap.php");?>  
  	</body>
</html>