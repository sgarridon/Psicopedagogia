<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		
		<?php $this->load->view("Header.php");?> 
			
		<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>" />	
	</head>
 
  	<body>
		<?php 
		    $this->load->view("BarraNavegacion.php");
            foreach($detplantilla as $fila)
            {
				$idPlantilla = $fila->at_id_plantilla;
				$TipoAct     = $fila->at_nombreactividad;
				$Descipcion  = $fila->at_descriplantilla;
            }
		?>		
		<div class="container">   
			<div class="panel panel-default">
		   		<div class="panel-heading">
		  			<h1 align="center">Detalle de Plantilla <?php echo $idPlantilla;?></h1>
		  			<h3>Tipo de actividad: <?php echo $TipoAct;?></h3>
		  			<h3>Descripción: <?php echo $Descipcion;?></h3>
		  		</div>
				<div class="panel-body">
				   	<form accept-charset="UTF-8" role="form" action="fun_DatosClonarPlantilla" method="POST">
		                 <fieldset>
		                 	<input type="hidden" name="inp_id" id="inp_id" value="<?php echo $idPlantilla;?>">
					   		<input class="btn btn-md btn-primary" type="submit" value="Clonar Plantilla">
					   	</fieldset>
				    </form>
<!--  				</div>   		
		  		<div> 	-->	
			 		<table class="table table-hover table-bordered">
					    <thead class="thead-inverse">
					        <tr>
					        	<th align="center">Imagen</th>
					            <th align="center">Respuesta esperada</th>
					            <th align="center">Puntos para respuesta correcta</th>
					        </tr>
					    </thead>
					    <tbody>		    
				            <?php 
					            foreach($detplantilla as $fila)
					            {
		
				            ?>
						            <tr>
						            	<td align="center"><img src="<?=base_url("img/".$fila->at_rutaimagen)?>" class="img-rounded" alt="<?=base_url("img/".$fila->at_rutaimagen)?>"/></td>
								        <td align="center"><?=$fila->at_respuestacorrecta?></td>
								        <td align="center"><?=$fila->at_puntosrespuesta?></td>
						            </tr>
				            <?php
					            }
				            ?>			     
					    </tbody>
					</table>
				</div>
			</div>
		</div>
        <script src="bootstrap-modal.js"></script>
     
    	<?php $this->load->view("FooterBootstrap.php");?>    	 
  	</body>
</html>