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
            foreach($detactividad as $fila)
            {
				$idActividad = $fila->at_id_actividad;
				$TipoAct     = $fila->at_nombreactividad;
				$Descipcion  = $fila->at_descripcion;
            }
		?>		
		<div class="container">   
			<div class="panel panel-default">
		   		<div class="panel-heading">
		  			<h1 align="center">Detalle de Actividad <?php echo $idActividad;?></h1>
		  			<h3>Tipo de actividad: <?php echo $TipoAct;?></h3>
		  			<h3>Descripción: <?php echo $Descipcion;?></h3>
		  		</div>
				<div class="panel-body">
			 		<table class="table table-hover table-bordered">
					    <thead class="thead-inverse">
					        <tr>
					        	<th align="center">Imagen</th>
					            <th align="center">Respuesta esperada</th>
					            <th align="center">Puntos de la pregunta</th>
					            <th align="center">Puntos obtenidos por Estudiante</th>
					            <th align="center">Estado de la pregunta</th>
					        </tr>
					    </thead>
					    <tbody>		    
				            <?php 
					            foreach($detactividad as $fila)
					            {
		
				            ?>
						            <tr>
						            	<td align="center"><img src="<?=base_url("img/".$fila->at_rutaimagen)?>" class="img-rounded" alt="<?=base_url("img/".$fila->at_rutaimagen)?>"/></td>
								        <td align="center"><?=$fila->at_respuestacorrecta?></td>
								        <td align="center"><?=$fila->at_puntosrespuesta?></td>
								        <td align="center"><?=$fila->at_puntosobtenidos?></td>
								        <td align="center"><?=$fila->at_estado?></td>
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