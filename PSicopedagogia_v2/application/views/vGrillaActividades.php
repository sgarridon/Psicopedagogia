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
  			<h1 align="center">Gestor de Activiades de Estudiantes</h1>
  		</div>
<!--   		
		<div class="panel-body">
		   	<form accept-charset="UTF-8" role="form" action="cPlantilla/agregar_plantilla" method="POST">
                 <fieldset>
			   		<input class="btn btn-md btn-primary" type="submit" value="Agregar nueva Plantilla">
			   	</fieldset>
		    </form>
		</div>  		
-->		
  		<div>
	 		<table class="table table-hover table-bordered">
			    <thead class="thead-inverse">
			        <tr>
			        	<th align="center">Estudiante</th>
			            <th align="center">Tipo de Actividad</th>
			            <th align="center">Descripción</th>
			            <th align="center">Fecha Inicio</th>
			            <th align="center">Fecha Término</th>
			            <th align="center">Detalle</th>
			        </tr>
			    </thead>
			    <tbody>		    
		            <?php
		            foreach($actividades as $fila)
		            {
		            ?>
		            <tr>
		            		<td align="left"><?=$fila->at_apellidopat.' '.$fila->at_apellidomat.' '.$fila->at_nombrePri?></td>
				            <td align="left"><?=$fila->at_nombreactividad?></td>
				            <td align="left"><?=$fila->at_descripcion?></td>
				            <td align="center"><?=$fila->at_fechainicio?></td>
				            <td align="center"><?=$fila->at_fechatermino?></td>
				            <td align="center"><p>
				                <form action="cActividadesEstudiante/fun_verActividad" role="form" method="POST">
				                	<input type="hidden" name="inp_id" id="inp_id" value="<?php echo $fila->at_id_actividad;?>">
				            		<input class="btn btn-md btn-primary" type="submit" value="Ver"> 
				            	</form>
				            </p></td>
		            </tr>
		            <?php
		            }
		            ?>			     
			    </tbody>
			</table>
    	</div>
   	
        <script src="bootstrap-modal.js"></script>
   
    	<?php $this->load->view("FooterBootstrap.php");?>  
  	</body>
</html>